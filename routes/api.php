<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json([
        'success'=>true,
        'message'=> 'Detail Logged in user',
        'data'=> $request->user()
    ]);
});

require __DIR__.'/auth.php';
