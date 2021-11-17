<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

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

/* Route::get('/', function () {
    return view('buku.index');
}); */

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/bookStore', [BookController::class, 'store']);
    Route::put('/bookUpdate/{id}', [BookController::class, 'update']);
    Route::put('/pengarangUpdate/{id}', [AuthorController::class, 'update']);
    Route::delete('/deleteBook/{id}', [BookController::class, 'delete']);
    Route::delete('/deletePengarang/{id}', [AuthorController::class, 'destroy']);
    Route::post('/pengarangStore', [AuthorController::class, 'store']);
});

Route::get('/editBook/{id}', [BookController::class, 'editForm']);
Route::get('/editPengarang/{id}', [AuthorController::class, 'editForm']);
Route::get('/addBook', [BookController::class, 'indexForm']);
Route::get('/detailBuku/{id}', [BookController::class, 'detailBook']);
Route::get('/detailAuthor/{id}', [AuthorController::class, 'detailAuthor']);
Route::get('/pengarang', [AuthorController::class, 'index']);
Route::get('/addPengarang', [AuthorController::class, 'indexForm']);

Route::get('/', [BookController::class, 'index']);
Route::get('/landingPage', [BookController::class, 'landingPage']);

Route::get('/login', [AuthController::class, 'indexLogin']);
Route::get('/register', [AuthController::class, 'indexRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
