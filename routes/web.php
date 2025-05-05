<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivitiyDocumentationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/headoffice', function () {
//     return view('headoffice');
// })->name('headoffice');

Route::get('/headoffice', [ActivitiyDocumentationController::class, 'index'])->name('headoffice');
Route::get('/statoffice', [ActivitiyDocumentationController::class, 'index'])->name('statoffice');
Route::get('/internaloffice', [ActivitiyDocumentationController::class, 'index'])->name('internaloffice');

// Route::get('/statoffice', function () {
//     return view('statoffice');
// })->name('statoffice');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
