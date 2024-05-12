<?php

use App\Http\Controllers\AssociateMemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegularMemberController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/memberApp', [MemberAppController::class, 'index'])->name('memberApp.index');
// Route::get('/memberApp/create', [MemberAppController::class, 'create'])->name('memberApp.create');
// Route::post('/memberApp', [MemberAppController::class, 'store'])->name('memberApp.store');
// Route::get('/memberApp/{memberApp}/edit', [MemberAppController::class, 'edit'])->name('memberApp.edit');
// Route::put('/memberApp/{memberApp}/update', [MemberAppController::class, 'update'])->name('memberApp.update');
// Route::delete('/memberApp/{memberApp}/destroy', [MemberAppController::class, 'destroy'])->name('memberApp.destroy');

Route::resource('regularMember', RegularMemberController::class);

Route::resource('associateMember', AssociateMemberController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
