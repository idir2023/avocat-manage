<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\StripeController;

// Routes publiques
Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/actualite', [ClientController::class, 'actualite'])->name('actualite');
Route::get('/expertise', [ClientController::class, 'expertise'])->name('expertise');

// Formulaire de contact
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::post('/contact', [ClientController::class, 'storeContact'])->name('contact.store');

// Formulaire de consultation

Route::post('/consultation/store', [ConsultationController::class, 'storeConsultation'])->name('consultation.store');
Route::post('/consultation/create-checkout-session', [ConsultationController::class, 'createCheckoutSession'])->name('consultation.createCheckoutSession');
Route::get('/stripe/success/{consultation_id}', [ConsultationController::class, 'success'])->name('stripe.success');
Route::get('/stripe/cancel', [ConsultationController::class, 'cancel'])->name('stripe.cancel');
 
// End consultation

// Routes protégées (auth requise)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Consultation resource route
    Route::resource('consultations', ConsultationController::class);

    // Ressources CRUD (admin only routes)
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resources([
            'parametres' => ParametreController::class,
            'expertises' => ExpertiseController::class,
            'actualites' => ActualiteController::class,
            'contacts' => ContactController::class,
        ]);
            // Gestion des utilisateurs
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/manage', [ProfileController::class, 'User'])->name('manage');
        Route::post('/add', [ProfileController::class, 'StoreUser'])->name('store');
        Route::patch('/update/{id}', [ProfileController::class, 'UpdateUser'])->name('update');
        Route::delete('/delete/{id}', [ProfileController::class, 'deleteUser'])->name('destroy');
    });
    });

});


// Gestion du profil utilisateur et utilisateurs
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclusion des routes d'auth
require __DIR__.'/auth.php';
