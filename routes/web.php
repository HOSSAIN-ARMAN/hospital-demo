<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\System\SystemController;


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


// Route::group(['middleware' => 'is_controller'], function(){
//     Route::prefix('control')->group(function(){
//          route::get('/index', [\App\Http\Controllers\SystemController::class, 'index'])->name('admin.systemController.create');
//     });
// });

// Route::get('/control/index', [SystemController::class, 'index'])->name('admin.systemController.create');
// route::post('/control/store', [\App\Http\Controllers\SystemController::class, 'index'])->name('systemController.hospital.store');

// Route::get('control/index', function(){
//     return view('admin.systemControl.index');
// })->name('admin.systemController.create');

Route::get('admin/system/index', [SystemController::class, 'index'])->name('admin.system.index');
Route::get('admin/system/create', [SystemController::class, 'create'])->name('admin.system.create');
Route::post('admin/system/store', [SystemController::class, 'store'])->name('admin.system.store');


Route::get('admin/home', [HomeController::class, 'index'])->name('home')->middleware('is_admin');
Route::get('user/home', [HomeController::class, 'user'])->name('user.home');

//Route binding for admin panel
require_once __DIR__ . '/admin/dashboard.php';  //for dashboard
require_once __DIR__ . '/admin/category.php';   //for Category
require_once __DIR__ . '/admin/testItem.php';    
require_once __DIR__ . '/admin/doctor.php';    
require_once __DIR__ . '/admin/odpReception.php';    

Route::group(['middleware' => 'is_admin'], function (){
    Route::prefix('order')->group(function (){
        Route::get('/index', [\App\Http\Controllers\admin\OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/create', [\App\Http\Controllers\admin\OrderController::class, 'create'])->name('admin.order.create');
    });
});

