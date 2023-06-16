<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/comm', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('comm');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

Route::get('/students/create', App\Http\Livewire\Students\Create::class)->name('students.create');
Route::get('/students/index', App\Http\Livewire\Students\Index::class)->name('students.index');
Route::get('/students/edit/{slug}', App\Http\Livewire\Students\Edit::class)->name('students.edit');

require __DIR__.'/auth.php';
