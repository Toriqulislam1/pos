<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\profileController;
use App\Http\Controllers\Backend\categoryController;

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

Route::controller(profileController::class)->group(function (){
    // admin view
    Route::get('admin/login',  'adminView');

});
Route::controller(categoryController::class)->group(function (){
    // category
    Route::get('category/add',  'categoryAdd')->name('categoryAdd');
    Route::post('/ajaxupload',  'categoryStore')->name('categoryStore');

    //unit
    Route::get('unit/add',  'unitAdd')->name('unitAdd');
    Route::post('/unitadd',  'unitStore');

});
