<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(PageController :: class) ->group(function(){
    Route::get('/','showHome') ->name('home');
    Route::get('/blog','showBlog') ->name('blog');
    Route::get('/user/{id}','showUser') ->name('users');
});
Route::get('/test',TestController::class);

