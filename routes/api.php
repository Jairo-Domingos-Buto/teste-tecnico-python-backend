<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FocoController;

Route::get("/diagnostico-produtividade", [FocoController::class, "index"]);
Route::post("/registrar-foco", [FocoController::class, "store"]);
