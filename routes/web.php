<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServicesController;

// ROTTE GENERALI - PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');
Route::get('/dove-ci-troviamo', [PublicController::class, 'doveCiTroviamo'])->name('dove-ci-troviamo');

// ROTTE CORSI - ServicesController
Route::get('/i-nostri-corsi', [ServicesController::class, 'iNostriCorsi'])->name('i-nostri-corsi');
Route::get('/data-analyst', [ServicesController::class, 'dataAnalyst'])->name('data-analyst');
Route::get('/i-a', [ServicesController::class, 'iA'])->name('i-a');
Route::get('/design', [ServicesController::class, 'design'])->name('design');
Route::get('/web-developer', [ServicesController::class, 'webDeveloper'])->name('web-developer');
