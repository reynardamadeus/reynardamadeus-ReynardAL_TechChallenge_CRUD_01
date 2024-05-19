<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::controller(MahasiswaController::class)->group(function() {
    Route::get('/', 'show')->name('show');
    Route::get('/create-mahasiswa', 'create')->name('create');
    Route::post('post-mahasiswa',  'store')->name('store');
    Route::get('/edit-mahasiswa/{id}', 'edit')->name('edit');
    Route::patch('/update-mahasiswa/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});



