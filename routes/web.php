<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyClientController;

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

Route::get('/clients', [MyClientController::class, 'index'])->name('clients.index');

Route::get('/clients/add', [MyClientController::class, 'create'])->name('clients.add');

Route::post('/clients', [MyClientController::class, 'store'])->name('clients.store');

Route::get('/clients/{myClient}/edit', [MyClientController::class, 'edit'])->name('clients.edit');

Route::put('/clients/{myClient}', [MyClientController::class, 'update'])->name('clients.update');

Route::get('/clients/{myClient}', [MyClientController::class, 'destroy'])->name('clients.destroy');

