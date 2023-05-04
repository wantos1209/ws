<?php

use Illuminate\Support\Facades\Route;
// new \App\Events\HelloEvent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/send-event", function (){
    $text = "Hallo ini event";
    broadcast(new \App\Events\HelloEvent($text));
});
