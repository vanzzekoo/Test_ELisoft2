<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('post.edit');



