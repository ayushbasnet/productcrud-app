<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
 


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
Route::redirect('/', '/index');
// Route::get('/index', 'ProductController@index');
// Route::get('/index', function(){
//     return view('index');
// });


 Route::get('/show', function(){
    return view('show');
});

Route::get('/edit', function(){
    return view('edit');
});

// Route::get('/create', function(){
//     return view('create');
// });

// Route::get('/layout', function(){
//     return view('layout');
// });

 Route::get('/welcome', function () {
     return view('welcome');
 });
Route::view('/create', 'create');
Route::post('/create', [ProductController::class,'store']);
Route::get('/index', [ProductController::class,'index']);
Route::get('/edit/{product}', [ProductController::class,'edit']);
Route::post('/edit/{product}', [ProductController::class,'update']);
Route::resource('product','ProductController');
