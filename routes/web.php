<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/demo', [\App\Http\Controllers\DemoExcelController::class, 'index']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', [HomeController::class, 'index'])->name('home')->middleware('is_admin');
Route::get('user/home', [HomeController::class, 'user'])->name('user.home');

//Route binding for admin panel
require_once __DIR__ . '/admin/dashboard.php';  //for dashboard
require_once __DIR__ . '/admin/category.php';   //for Category


Route::group(['middleware' => 'is_admin'], function (){
    Route::prefix('order')->group(function (){
        Route::get('/index', [\App\Http\Controllers\admin\OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/create', [\App\Http\Controllers\admin\OrderController::class, 'create'])->name('admin.order.create');
    });
});
