<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthControllerME;
use App\Models\Authors;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    //  book
    Route::POST('/books', [BookController::class, 'store']);
    Route::PUT('/books/{id}', [BookController::class, 'update']);
    Route::DELETE('/books/{id}', [BookController::class, 'delete']);
    //  author
    Route::POST('/authors', [AuthorController::class, 'store']);
    Route::PUT('authors/{id}', [AuthorController::class, 'update']);
    Route::DELETE('authors/{id}', [AuthorController::class, 'destroy']);
});

Route::GET('/authors', [AuthorController::class, 'index']);
Route::GET('authors/{id}', [AuthorController::class, 'show']);

Route::GET('/books', [BookController::class, 'index']);
Route::GET('/books/search/{title}', [BookController::class, 'search']);
Route::GET('/books/{id}', [BookController::class, 'show']);
// auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');
Route::get('/user', [AuthController::class, 'index']);
