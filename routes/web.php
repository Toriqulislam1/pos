<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\profileController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\productController;
use App\Models\Article;
use App\Models\language;
use App\Models\ArticleTranslations;
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

Route::get('/', function () {


    $article = Article::create(['status' => true]);

    $english = language::where('code', 'en')->first();
    $spanish = language::where('code', 'es')->first();

    $article->translations()->create([
        'lang_id' => $english->id,
        'title' => 'English Title',
        'description' => 'English Description',
    ]);

    $article->translations()->create([
        'lang_id' => $spanish->id,
        'title' => 'Spanish Title',
        'description' => 'Spanish Description',
    ]);

    $englishArticle = $article->translate($english->id);
    $spanishArticle = $article->translate($spanish->id);

    echo $englishArticle->title;  // Output: English Title
    echo $spanishArticle->title;  // Output: Spanish Title








return view('welcome');
});

Route::controller(profileController::class)->group(function (){
    // admin view
    Route::get('admin/login',  'adminView');

});
Route::controller(categoryController::class)->group(function (){
    // category
    Route::get('category/add',  'categoryAdd')->name('categoryAdd');
    Route::post('/categpry/store',  'categoryStore')->name('categoryStore');

    //unit
    Route::get('unit/add',  'unitAdd')->name('unitAdd');
    Route::post('/unitadd',  'unitStore');

    //tex
    Route::get('tex/add',  'texAdd')->name('texAdd');
    Route::post('/tex/store',  'texStore')->name('texStore');

});

//product
Route::controller(productController::class)->group(function (){
    // category
    Route::get('product',  'productHome')->name('productHome');
    Route::post('/categpry/store',  'categoryStore')->name('categoryStore');

    //unit
    Route::get('unit/add',  'unitAdd')->name('unitAdd');
    Route::post('/unitadd',  'unitStore');

    //tex
    Route::get('tex/add',  'texAdd')->name('texAdd');
    Route::post('/tex/store',  'texStore')->name('texStore');

});
