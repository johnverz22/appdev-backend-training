<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Show all posts
Route::get("/post", [PostController::class, "index"]);
//Show specific post
Route::get("/post/{post}", [PostController::class, "show"]);
//Store or create new post
Route::post("/post", [PostController::class,"store"]);
//Delete a post
Route::delete("/post/{post}", [PostController::class, "destroy"]);
//Update a post
Route::put("/post/{post}", [PostController::class, "update"]);

