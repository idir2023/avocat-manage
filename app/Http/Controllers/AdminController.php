<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expertise;
use App\Models\Actualite;
use App\Models\Pack;
use App\Models\Consultation;
use App\Models\Contact;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
     
        return view('admins.index', [
            'totalExpertise' => Expertise::count(),
            'totalActualite' => Actualite::count(),
            'totalPack' => Pack::count(),
            'totalConsultation' => Consultation::count(),
            'totalContact' => Contact::count(),
            'totalUser' => User::where('is_admin', false)->count()
        ]);
    }
}