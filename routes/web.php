<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeController;
// use App\Http\Controllers\YoutubeController2;
use App\Http\Controllers\SampleController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('youtube/channels/{id}/titles', 'Api\YoutubeController@getListByChannelId');
Route::get('/youtube', [YoutubeController::class, 'index']);
