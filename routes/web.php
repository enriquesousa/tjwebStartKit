<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
})->name('home');


// *********
// Socialite
// *********
// Route::get('/google-auth/redirect', function () {
//     return Socialite::driver('google')->redirect();
// });
 
// Route::get('', function () {
//     $user = Socialite::driver('google')->user();
 
//     // $user->token
// });
// *********


Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/backend/welcome', function () {
    return view('welcome-backend');
})->name('backend_welcome');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Mis Rutas
|--------------------------------------------------------------------------
*/

// Pagina de Ayuda y Descripción del Proyecto
Route::get('/page/ayuda', function () {
    return view('page_ayuda');  
})->name('page.ayuda');


Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');


Route::middleware(['auth'])->group(function () {

    // Admin
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');



});