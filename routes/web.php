<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosbingController;
use App\Http\Controllers\KpController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MatkulController;
use App\Http\Middleware\AdminOnly;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\MahasiswaOnly;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');

    Route::middleware(Authenticate::class)->group(function(){
        Route::post('/logout', 'logout')->name('logout');
    });
});

Route::controller(KpController::class)->group(function(){
    Route::middleware(MahasiswaOnly::class)->group(function(){
        Route::get('/kp/create', 'create')->name('kp.create');
        Route::post('/kp/store', 'store')->name('kp.store');
        Route::get('/kp/edit/{id}', 'edit')->name('kp.edit');
        Route::put('/kp/update/{id}', 'update')->name('kp.update');
    });

    Route::middleware(Authenticate::class)->group(function(){
        Route::get('/kp', 'index')->name('kp');
        Route::get('/kp/{id}', 'show')->name('kp.show');
        Route::put('/kp/verif', 'verif')->name('kp.verif');
    });
});

Route::controller(MagangController::class)->group(function(){
    Route::middleware(MahasiswaOnly::class)->group(function(){
        Route::get('/magang/create', 'create')->name('magang.create');
        Route::post('/magang/store', 'store')->name('magang.store');
        Route::get('/magang/edit/{id}', 'edit')->name('magang.edit');
        Route::put('/magang/update/{id}', 'update')->name('magang.update');
    });

    Route::middleware(Authenticate::class)->group(function(){  
        Route::get('/magang', 'index')->name('magang');
        Route::get('/magang/{id}', 'show')->name('magang.show');
        Route::put('/magang/verifAjuan', 'verifAjuan')->name('magang.verifAjuan');
        Route::put('/magang/verifRekognisi', 'verifRekognisi')->name('magang.verifRekognisi');
    });
});

Route::controller(DosbingController::class)->group(function(){
    Route::middleware(AdminOnly::class)->group(function(){
        Route::get('/dosbing', 'index')->name('dosbing');
        Route::get('/dosbing/create', 'create')->name('dosbing.create');
        Route::post('/dosbing/store', 'store')->name('dosbing.store');
    });
});

Route::controller(MatkulController::class)->group(function(){
    Route::middleware(AdminOnly::class)->group(function(){
        Route::get('/matkul', 'index')->name('matkul');
        Route::get('/matkul/create', 'create')->name('matkul.create');
        Route::post('/matkul/store', 'store')->name('matkul.store');
    });
});