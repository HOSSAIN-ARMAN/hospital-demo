<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;

//Route::get('category', 'CategoryController@index')->name('admin.category.index');  <--this way not work for version 7.2.0;-->
Route::get('category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('category.create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('category.store', [CategoryController::class, 'store'])->name('admin.category.store');

?>
