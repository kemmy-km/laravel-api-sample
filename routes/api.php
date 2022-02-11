<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// http://127.0.0.1:8000/api/sample
Route::get('/sample', function () {
    // return view('sample');
    return response()->json([
        'name' => '山田太郎', 'gender' => '男','mail' => 'yamada@test.com']
    );
    // return response()->json();
});

Route::get('/sample2', [
    SampleController::class, 'apiHello'
]);

Route::get('/ping', function (Request $request) {
    return response()->json(
        ['result' => 'pong'],
        Response::HTTP_OK
    );
});
