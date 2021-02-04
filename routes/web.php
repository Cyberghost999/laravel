<?php
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Name;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\Post;
use App\Http\Controllers\StringController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;


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
Route::get('/test', [Test::class,'try'])->name('home.index');
Route::get('/welcome/{name}' ,[Name::class,'wel'])->name('welcome.index');
Route::get('/try', function(){
    return view('name');
});
Route::get('/fruit',[FruitController::class, 'index'])->name('Fruit.index');
Route::get('/post',[Post::class, 'allPost'])->name('post.index');
Route::get('/post/{id}',[Post::class, 'getPostbyID'])->name('post.filter');
Route::get('/add-post', [Post::class, 'addPost'])->name('add.post');
Route::get('/update', [Post::class, 'update'])->name('up.date');
Route::get('/delete/{id}', [Post::class, 'delete'])->name('del.eat');
Route::get('/string', [StringController::class, 'index'])->name('use.index');
Route::get('/form', [LoginController::class, 'index'])->name('login.index')->middleware('check');
Route::post('/form', [LoginController::class, 'submit'])->name('submit.index');
Route::get('/session/get',[SessionController::class, 'index']);
Route::get('/session/put',[SessionController::class, 'store']);
Route::get('/session/delete',[SessionController::class, 'delete']);
Route::get('/session/show', [SessionController::class, 'show'])->name('show');

