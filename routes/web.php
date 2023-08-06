<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUrlsController;
use App\Http\Controllers\AdminHistoryController;
use App\Http\Controllers\AdminUplodeFileControllers;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\Ocupational_health_safety;
use App\Http\Controllers\Admin_GroupController;
use App\Http\Controllers\Admin_MenugroupController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

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

    // List Product
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/a', [ProductController::class, 'show']);
Route::get('/b', [UserController::class, 'show']);
Route::post('/d', [UserController::class, 'delete']);


// ------------------- social
Route::get('/social', function () {
    return view('site/social/index');
});
// health-well-being-consumers
Route::get('/social/health-well-being-consumers', function () {
    return view('site/social/health-well-being-consumers');
});
