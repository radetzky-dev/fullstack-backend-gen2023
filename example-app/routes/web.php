<?php

use App\Http\Controllers\MyTestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/ciao', function (Request $request) {
    $myarray = $request->query();
    //to do
    return "ok";

});

Route::view('/provaparametro', 'prova', ['name' => 'Paolo']);

Route::redirect("/ciaomondo", "/ciao");



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

//OPTIONAL PARAMS
Route::get('/users/{name?}', function (string $name = null) {
    return $name;
});
 
Route::get('/users/{name?}', function (string $name = 'John') {
    return $name;
});

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return "Il mio $id e il mio $name";
})->whereNumber('id')->whereAlpha('name');
 
Route::get('/usernames/{name}', function (string $name) {
    return "Il mio $name";
})->whereAlphaNumeric('name');
 
//5ace9ab9-e9cf-4ec6-a19d-5881212a452c
Route::get('/useruuid/{id}', function (string $id) {
    return "Il mio $id";
})->whereUuid('id');
 
Route::get('/category/{category}', function (string $category) {
    return "La categoria scelta fra le ammesse è $category";
})->whereIn('category', ['movie', 'song', 'painting']);