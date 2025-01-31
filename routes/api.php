<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("/post", [PostController::class, "index"]);
Route::get("/post/{post}", [PostController::class, "show"]);
Route::post("/post", [PostController::class,"store"]);
Route::delete("/post/{post}", [PostController::class, "destroy"]);
Route::put("/post/{post}", [PostController::class, "update"]);

