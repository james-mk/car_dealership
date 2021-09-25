<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkUserType;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Employees\EmployeeDashboard;
use App\Http\Livewire\WebUsers\WebUsersDashboard;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');


    // Route::get('admin/dashboard',AdminDashboard::class)->middleware('checkUserType')->name('admin.dashboard');
    // Route::get('employee/dashboard',EmployeeDashboard::class)->middleware('checkUserType')->name('employee.dashboard');
    // Route::get('user/dashboard',WebUsersDashboard::class)->middleware('checkUserType')->name('user.dashboard');


});
