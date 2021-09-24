<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// task migration
Route::GET('/books', [BookController::class, 'index']);
Route::POST('/books', [BookController::class, 'store']);
// get data use title
Route::GET('/books/search/{title}', [BookController::class, 'search']);
// get data use id
Route::GET('/books/{id}', [BookController::class, 'show']);
Route::PUT('/books/{id}', [BookController::class, 'update']);
Route::DELETE('/books/{id}', [BookController::class, 'delete']);

// endpoint task
Route::GET('/me', [AuthController::class, 'index']);

// (/authors ==> GET, POST; authorsi{(id} ==> GET, PUT, DELETE)
Route::GET('/authors', [AuthorController::class, 'index']);
Route::POST('/authors', [AuthorController::class, 'store']);
Route::GET('authors/{id}', [AuthorController::class, 'show']);
Route::PUT('authors/{id}', [AuthorController::class, 'update']);
Route::DELETE('authors/{id}', [AuthorController::class, 'destroy']);
