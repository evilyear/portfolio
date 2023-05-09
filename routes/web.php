<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmploymentHistoryController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillElementController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainDataController;
use App\Http\Controllers\ReferenceController;
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



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
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

        Route::get('/skill', [SKillController::class, 'create'])->name('skill.create');
        Route::post('/skill', [SKillController::class, 'store'])->name('skill.store');
        Route::get('/skill-list', [SKillController::class, 'index'])->name('skill.index');
        Route::get('/skill/delete/{skill}',[SKillController::class, 'destroy'])->name('skill.destroy');
        Route::get('/skill/{skill}', [SKillController::class, 'edit'])->name('skill.edit');
        Route::post('/skill/edit/{skill}', [SKillController::class, 'update'])->name('skill.update');

        Route::get('/skill_element', [SkillElementController::class, 'create'])->name('skill_element.create');
        Route::post('/skill_element', [SkillElementController::class, 'store'])->name('skill_element.store');
        Route::get('/skill_element-list', [SkillElementController::class, 'index'])->name('skill_element.index');
        Route::get('/skill_element/delete/{skill_element}',[SkillElementController::class, 'destroy'])->name('skill_element.destroy');
        Route::get('/skill_element/{skill_element}', [SkillElementController::class, 'edit'])->name('skill_element.edit');
        Route::post('/skill_element/edit/{skill_element}', [SkillElementController::class, 'update'])->name('skill_element.update');

        Route::get('/language', [languageController::class, 'create'])->name('language.create');
        Route::post('/language', [languageController::class, 'store'])->name('language.store');
        Route::get('/language-list', [languageController::class, 'index'])->name('language.index');
        Route::get('/language/delete/{language}',[languageController::class, 'destroy'])->name('language.destroy');
        Route::get('/language/{language}', [languageController::class, 'edit'])->name('language.edit');
        Route::post('/language/edit/{language}', [languageController::class, 'update'])->name('language.update');

        Route::get('/main_data', [MainDataController::class, 'create'])->name('main_data.create');
        Route::post('/main_data', [MainDataController::class, 'store'])->name('main_data.store');
        Route::get('/main_data-list', [MainDataController::class, 'index'])->name('main_data.index');
        Route::get('/main_data/delete/{main_data}',[MainDataController::class, 'destroy'])->name('main_data.destroy');
        Route::get('/main_data/{main_data}', [MainDataController::class, 'edit'])->name('main_data.edit');
        Route::post('/main_data/edit/{main_data}', [MainDataController::class, 'update'])->name('main_data.update');

        Route::get('/reference', [ReferenceController::class, 'create'])->name('reference.create');
        Route::post('/reference', [ReferenceController::class, 'store'])->name('reference.store');
        Route::get('/reference-list', [ReferenceController::class, 'index'])->name('reference.index');
        Route::get('/reference/delete/{reference}',[ReferenceController::class, 'destroy'])->name('reference.destroy');
        Route::get('/reference/{reference}', [ReferenceController::class, 'edit'])->name('reference.edit');
        Route::post('/reference/edit/{reference}', [ReferenceController::class, 'update'])->name('reference.update');
    });
});
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
