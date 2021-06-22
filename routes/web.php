<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\FrontEndController;
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
Route::get('/login', [LoginController::class, 'LoginPage'])->name('login');
Route::post('/postLogin', [LoginController::class, 'PostLogin'])->name('PostLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [FrontEndController::class, 'index']);

Route::group(['middleware' =>['auth']], function(){
    Route::get('/admin', [PackageController::class, 'index']);
    Route::get('/admin/{id}/update-package', [PackageController::class, 'edit']);
    Route::patch('/admin/{id}/update-package', [PackageController::class, 'update']);
    Route::get('/admin/add-package', [PackageController::class, 'create']);
    Route::post('/admin/add-package', [PackageController::class, 'store']);
    Route::get('/admin/delete/{id}', [PackageController::class, 'destroy']);

    Route::get('/admin/manage-profile', [CompanyController::class, 'index']);
    Route::get('/admin/company-profile', [CompanyController::class, 'edit']);
    Route::patch('/admin/company-profile', [CompanyController::class, 'update']);



});
