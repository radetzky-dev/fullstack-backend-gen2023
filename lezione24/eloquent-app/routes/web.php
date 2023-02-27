<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;


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


Route::resource('voli', FlightController::class)->missing(function () {
    return Redirect::route('voli.index');
});

Route::get('userphone/{id}', [UserController::class, 'phone']);
Route::get('phoneid/{idphone}', [UserController::class, 'getUserFromIdPhone']);

use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User;
 
Route::get('/user/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});

Route::get('/users', function () {
    return new UserCollection(User::all());
});

Route::get('/searchuser', function () {
    return view('searchuser');
});

Route::post('/search', [UserController::class, 'search']);

use App\Http\Resources\FlightResource;
use App\Models\Flight;
 
Route::get('/volo/{id}', function (string $id) {
    return new FlightResource(Flight::findOrFail($id));
});

use App\Http\Controllers\SesController;

Route::get('session/get', [SesController::class, 'accessSessionData']);
Route::get('session/set', [SesController::class, 'storeSessionData']);
Route::get('session/remove', [SesController::class, 'deleteSessionData']);