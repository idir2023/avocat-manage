<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
 

Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/about', [ClientController::class, 'About'])->name('about');
Route::get('/services', [ClientController::class, 'Services'])->name('services');
Route::get('/portfolio', [ClientController::class, 'Portfolio'])->name('portfolio');
Route::get('/team', [ClientController::class, 'Team'])->name('team');
// Route to handle the form submission
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::post('/contact', [ClientController::class, 'store'])->name('contact.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admins.index');
    })->name('dashboard');

Route::resource('settings', SettingController::class);
Route::resource('contacts', ContactController::class);


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
