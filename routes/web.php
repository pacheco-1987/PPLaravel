<?php

use App\Http\Controllers\MayoristasController;
//use App\Models\Mayoristas;
use Illuminate\Support\Facades\Route;



Route::get('/',[MayoristasController::class, 'index'])->name('mayoristas.index');
Route::get('/create',[MayoristasController::class, 'create'])->name('mayoristas.create');
Route::post('/store',[MayoristasController::class, 'store'])->name('mayoristas.store');
Route::get('/edit',[MayoristasController::class, 'edit'])->name('mayoristas.edit');