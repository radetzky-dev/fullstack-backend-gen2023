<?php

use App\Http\Controllers\MyTestController;
use Illuminate\Support\Facades\Route;

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

Route::view('/testmio', 'test');

Route::get('/test', function () {
    return view('test');
});

Route::get('/user/profile', function () {
    return "Utente";
})->name('profile');

Route::get('/ciao', function () {
    return "Hello World questo è scritto a video";
});

Route::view('/provaparametro', 'prova', ['name' => 'Paolo']);

Route::redirect("/ciaomondo", "/ciao");

Route::get('/user/{id}', function (string $id) {
    return 'Il tuo id user è '.$id;
})->name("user");

Route::get('/username/{name}', function (string $name) {
    return 'Questo username è valido : '.$name;
})->where('name', '[A-Za-z]+');

Route::get('/users/{name}/{number}', function ($name, $number) {
    return 'Questo username è valido : '.$name . " num ".$number;
})->where(['name' => '[A-Za-z]+','number' => '[0-9]+']);


Route::get('/posts/{post}/comments/{comment}', function (string $mario, string $commentId) {
    return 'Il tuo id post è '.$mario. " il commento id è ".$commentId;
});

Route::get('/hello-controller/', [MyTestController::class,'greeting']);
