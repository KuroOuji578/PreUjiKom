<?php

use App\Http\Controllers\DashboardController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
})->name('dash');

Route::get('/create', [DashboardController::class, 'create'])->name('customer.create');
Route::post('/store', [DashboardController::class, 'store'])->name('customer.store');
Route::get('/destroy/{id}', [DashboardController::class, 'destroy'])->name('customer.destroy');
