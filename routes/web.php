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
// use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

// Changer la langue
// Route::get('/lang/{locale}', [LanguageController::class, 'change'])->name('change.lang');

// Routes publiques
Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/actualite', [ClientController::class, 'actualite'])->name('actualite');
Route::get('/expertise', [ClientController::class, 'expertise'])->name('expertise');

// Formulaire de contact
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::post('/contact', [ClientController::class, 'storeContact'])->name('contact.store');

// Routes protégées (auth requise)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Ressources CRUD
    Route::resources([
        'parametres' => ParametreController::class,
        'consultations' => ConsultationController::class,
        'expertises' => ExpertiseController::class,
        'actualites' => ActualiteController::class,
        'contacts' => ContactController::class,
    ]);
});

// Gestion du profil utilisateur et utilisateurs
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Gestion des utilisateurs
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/manage', [ProfileController::class, 'User'])->name('manage');
        Route::post('/add', [ProfileController::class, 'StoreUser'])->name('store');
        Route::patch('/update/{id}', [ProfileController::class, 'UpdateUser'])->name('update');
        Route::delete('/delete/{id}', [ProfileController::class, 'deleteUser'])->name('destroy');
    });
});

// Inclusion des routes d'auth
require __DIR__.'/auth.php';
