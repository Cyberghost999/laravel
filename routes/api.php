<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Method;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hello/{name?}',function($name = null){
    return 'Hello ' . $name;
});
Route::get('/product/{id?}', function($id = null){
    return 'Product ID is '. $id;
}) -> where('id','[0-9]+');
Route::match(['get','post'],'/universal', function(Request $req){
    return 'Requested method is '. $req ->method();
});
Route::get('/method', [Method::class, 'index'])->name('method.index');
Route::get('/path', [Method::class, 'path']);
Route::get('/route', [Method::class, 'route']);
Route::get('/full-route', [Method::class, 'fullRoute']);