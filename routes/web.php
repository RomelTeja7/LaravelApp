<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProyectosController::class, "main"])->name("crud.index");
Route::post('/create', [ProyectosController::class, "create"])->name("crud.create");
Route::get('/read-{id}', [ProyectosController::class, "read"])->name("crud.read");
Route::post('/update', [ProyectosController::class, "update"])->name("crud.update");
Route::get('/delete-{id}', [ProyectosController::class, "delete"])->name("crud.delete");
Route::get('/pdf-{id}', [PdfController::class, "generatePdf"])->name("generate.pdf");