<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Resources\FilmResource;
use App\Http\Resources\NewsResource;
use App\Models\Film;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/products', [ProductController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/news', function() {
    $news = News::with('category')->get();
    return NewsResource::collection($news);
});

Route::get('/films', function() {
    $films = Film::with('category')->get();
    return FilmResource::collection($films);
});

Route::post('/update', function() {
    $user = User::find(1);
    $user->email = 'admin@email.com';
    
    if($user->save()) {
        return response()->json(['status' => 'success']);
    }
});