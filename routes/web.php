<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// About
Route::get('/about',function () {
    return view('about');
});

Route::get('/ping', function(){
    return response()->json(['message' => 'Halo Mok',
                                    'Status' => 'Lapar Mok'
]);
});