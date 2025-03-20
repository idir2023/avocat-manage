<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;


// Route::get('lang', [LanguageController::class, 'change'])->name("change.lang");

 
// Routes publiques
Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/about', [ClientController::class, 'About'])->name('about');
Route::get('/actualite', [ClientController::class, 'actualite'])->name('actualite');
Route::get('/expertise', [ClientController::class, 'expertise'])->name('expertise');

// Route pour le formulaire de contact
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::post('/contact', [ClientController::class, 'storeContact'])->name('contact.store');

// Routes protégées (authentification requise)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Ressources CRUD
    Route::resource('parametres', ParametreController::class);
    Route::resource('consultations', ConsultationController::class);
    Route::resource('expertises', ExpertiseController::class);
    Route::resource('actualites', ActualiteController::class);
    Route::resource('contacts', ContactController::class);
});

// Gestion du profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User Management Routes
    Route::get('/manage-users', [ProfileController::class, 'User'])->name('users.manage');  // Affichage gestion des utilisateurs
    Route::post('/add-user', [ProfileController::class, 'StoreUser'])->name('users.store');
    Route::patch('/update-user/{id}', [ProfileController::class, 'UpdateUser'])->name('users.update');
    Route::delete('/delete-user/{id}', [ProfileController::class, 'deleteUser'])->name('users.destroy');

});

// Inclusion des routes d'authentification
require __DIR__.'/auth.php';
