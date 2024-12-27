<?php
use App\Http\Controllers\HomeController;

// use App\Http\Controllers\ShowCarControl;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::view('/about','about')->name('about');
Route::fallback(function(){
    return "404 Not Found";
});
