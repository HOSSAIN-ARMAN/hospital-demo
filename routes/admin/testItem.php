<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\testModule\TestModuleController;

Route::get('testItem', [TestModuleController::class, 'index'])->name('admin.testModule.index');

