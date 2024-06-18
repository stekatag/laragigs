<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            [
                'title' => 'Post 1'
            ],
            [
                'title' => 'Post 2'
            ]
        ]
    ]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
