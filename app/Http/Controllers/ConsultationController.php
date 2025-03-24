<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Pack;

class ConsultationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function index()
    {
        if (!auth()->user()->is_admin) {
            $consultations = Consultation::
            where('user_id', auth()->id())
            ->paginate(10);
        } else {
            $consultations = Consultation::paginate(10);
        }
        
        return view('admins.consultations.index', compact('consultations'));
    }
    
    public function storeConsultation(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('register')->with('error', 'Veuillez vous connecter avant de procéder au paiement.');
        }

        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:50',
            'probleme' => 'required|string',
            'fichier' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'pack_id' => 'nullable|exists:packs,id',

        ]);

        // Stocker le fichier si présent
        $fichierPath = $request->file('fichier') ? $request->file('fichier')->store('consultations', 'public') : null;

        // Création de la consultation
        $consultation = Consultation::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'probleme' => $request->probleme,
            'fichier' => $fichierPath,
            'paiement_status' => 'en attente',
            'pack_id' => $request->pack_id,
            'user_id' => auth()->id(),
        ]);

        // Retourner l'ID de la consultation
        return response()->json([
            'success' => true,
            'consultation_id' => $consultation->id
        ]);
    }

    /**
     * Create a Stripe Checkout session.
     */
   
    public function createCheckoutSession(Request $request)
    {
        try {
            // Validate the consultation ID in the request
            $consultationId = $request->input('consultation_id');
            $consultation = Consultation::findOrFail($consultationId);
            $pack = Pack::findOrFail($consultation->pack_id);
        
            // Set up Stripe API key
            Stripe::setApiKey(env('STRIPE_SECRET'));
    
            // Convert price to cents (assuming $pack->price is in Dirhams)
            $amountInCents = $pack->price * 100; // Convert to cents
    
            // Create a Stripe checkout session
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'eur',  // Assuming you want to use EUR for the transaction
                            'product_data' => [
                                'name' => 'Consultation Médicale',
                            ],
                            'unit_amount' => $amountInCents, // Amount in cents
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('stripe.success', ['consultation_id' => $consultation->id]),
                'cancel_url' => route('stripe.cancel'),
            ]);
    
            // Return the session ID to the frontend
            return response()->json(['id' => $session->id]);
    
        } catch (\Exception $e) {
            // Return error message
            return response()->json(['error' => 'Erreur lors de la création de la session Stripe: ' . $e->getMessage()]);
        }
    }
    
    /**
     * Success after payment.
     */
    public function success($consultation_id)
    {
        // Mettre à jour le statut du paiement dans la base de données
        Consultation::where('id', $consultation_id)->update(['paiement_status' => 'payé']);
        
        return redirect()->route('cons')
                         ->with('success', 'Paiement effectué avec succès.');
    }

    /**
     * Cancel the payment.
     */
    public function cancel()
    {
        return redirect()->back()->with('error', 'Le paiement a été annulé.');
    }

    /**
     * Show the specified resource.
     */
    public function show(Consultation $consultation)
    {
        return view('admins.consultations.show', compact('consultation'));
    }
    public function reply(Request $request, $id)
{
    $consultation = Consultation::findOrFail($id);
    
    // Store the reply in your database
    $consultation->update([
         'reply_text' => $request->input('reply'),
    ]);

    // return response()->json(['message' => 'Réponse envoyée avec succès.']);
    return redirect()->route('consultations.index')->with('success', 'Réponse envoyée avec succès');

}

 
    public function destroy(Consultation $consultation)
    {
        // Delete the consultation from the database
        $consultation->delete();

        // Redirect back to the consultations index page with a success message
        return redirect()->route('consultations.index')->with('success', 'Consultation deleted successfully');
    }
 
}
