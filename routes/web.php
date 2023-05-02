<?php

use App\Http\Controllers\DashboardController;
use App\Models\Customer;
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

    $data = Customer::all();

    return view('dashboard', compact('data'));
});

Route::get('/create', [DashboardController::class, 'create'])->name('customer.create');

Route::get('/destroy/{id}', [DashboardController::class, 'destroy'])->name('customer.destroy');
