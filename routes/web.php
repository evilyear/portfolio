<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmploymentHistoryController;
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

Route::middleware('auth')->group(function () {
    Route::get('/education', [EducationController::class, 'create'])->name('education.create');
    Route::post('/education', [EducationController::class, 'store'])->name('education.store');

    Route::get('/education-list', [EducationController::class, 'index'])->name('education.index');

    Route::get('/education/delete/{education}',[EducationController::class, 'destroy'])->name('education.destroy');
    Route::get('/education/{education}', [EducationController::class, 'edit'])->name('education.edit');
    Route::post('/education/edit/{education}', [EducationController::class, 'update'])->name('education.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/employment_history', [EmploymentHistoryController::class, 'create'])->name('employment_history.create');
    Route::post('/employment_history', [EmploymentHistoryController::class, 'store'])->name('employment_history.store');

    Route::get('/employment_history-list', [EmploymentHistoryController::class, 'index'])->name('employment_history.index');

    Route::get('/employment_history/delete/{employment_history}',[EmploymentHistoryController::class, 'destroy'])->name('employment_history.destroy');
    Route::get('/employment_history/{employment_history}', [EmploymentHistoryController::class, 'edit'])->name('employment_history.edit');
    Route::post('/employment_history/edit/{employment_history}', [EmploymentHistoryController::class, 'update'])->name('employment_history.update');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
