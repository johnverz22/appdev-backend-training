<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    echo "Gising na mga tulog!!";
// });

Route::get('/post', function(){
   return view('post.create');
});

