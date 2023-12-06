<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FeedbackController;


Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});
Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Menu', [MenuController::class, 'index']);




Route::get('/gallery', function () {
    return view('Gallery');
});


Route::get('/resumes2', function () {
    return view('resumes2');
});




Route::get('/Description', function () {
    return view('Description');
});

Route::get('/Specials', function () {
    return view('Specials');
});




Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/create', [FeedbackController::class, 'store'])->name('feedback.store');
