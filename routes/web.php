<?php

use App\Http\Controllers\VacantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('vacants/allVacants', [VacantController::class, 'vacants'])->name('vacants.allVacants');
Route::get('vacants/createVacant', [VacantController::class, 'createVacant'])->name('vacants.createVacant');
Route::post('vacants/saveVacant', [VacantController::class, 'saveVacant'])->name('vacants.saveVacant');
Route::get('vacants/viewVacant/{id}', [VacantController::class, 'viewVacant'])->name('vacants.viewVacant');
