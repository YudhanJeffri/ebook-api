<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiBookController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ApiAuthControllerME;
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
    Route::POST('/books', [ApiBookController::class, 'store']);
    Route::PUT('/books/{id}', [ApiBookController::class, 'update']);
    Route::DELETE('/books/{id}', [ApiBookController::class, 'delete']);
    //  author
    Route::POST('/authors', [AuthorController::class, 'store']);
    Route::PUT('authors/{id}', [AuthorController::class, 'update']);
    Route::DELETE('authors/{id}', [AuthorController::class, 'destroy']);
});

Route::GET('/authors', [AuthorController::class, 'index']);
Route::GET('authors/{id}', [AuthorController::class, 'show']);

Route::GET('/books', [ApiBookController::class, 'index']);
Route::GET('/books/search/{title}', [ApiBookController::class, 'search']);
Route::GET('/books/{id}', [ApiBookController::class, 'show']);
// auth
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/me', [ApiAuthController::class, 'me'])->middleware('auth:sanctum');
Route::get('/user', [ApiAuthController::class, 'index']);
