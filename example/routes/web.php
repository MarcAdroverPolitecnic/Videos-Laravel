<?php

use App\Http\Controllers\JobController;
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

Route::resource('jobs', JobController::class, [
    'only'
]);

//Route::get('/contact', function () {
//    return view('contact');
//});

Route::view('/contact', 'contact');
