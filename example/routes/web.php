<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('home');
//});

//Lo de adalt passa a ser aquesta linia

Route::view('/', 'home');



/*Route::controller(JobController::class)->group(function (){

// Index
    Route::get('/jobs','index');

// Create
    Route::get('/jobs/create','create');

// Show
    Route::get('/jobs/{job}','show');

// Store
    Route::post('/jobs','store');

// Edit
    Route::get('/jobs/{job}/edit','edit');

// Update
    Route::patch('/jobs/{job}','update');

// Destroy
    Route::delete('/jobs/{job}','destroy');

});*/

//Això d'adalt passa a ser simplement aquesta comanda de abaix

Route::resource('jobs', JobController::class);

//Route::get('/contact', function () {
//    return view('contact');
//});

Route::view('/contact', 'contact');



Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
