<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyblogController as MyController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mypost',[MyController::class,'index'])->name('mypost.index');
// Route::get('/mypost/create',[MyController::class,'create'])->name('mypost.create');
// Route::post('/mypost',[MyController::class,'store'])->name('mypost.store');
// Route::get('/mypost/{mypost}/edit',[MyController::class,'edit'])->name('mypost.edit');
// Route::put('/mypost/{mypost}', [MyController::class,'update'])->name('mypost.update');
// Route::delete('/mypost/{mypost}', [MyController::class,'destroy'])->name('mypost.destroy');
// Route::get('/mypost/{mypost}',[MyController::class,'show'])->name('mypost.show');

Route::resource('/mypost',MyController::class);

Route::get('/contactus',[MyController::class,'contactUs'])->name('contactus');
Route::get('/aboutus',[MyController::class,'aboutUs'])->name('aboutus');
