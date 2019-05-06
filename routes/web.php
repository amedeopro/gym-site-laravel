<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/corsifitness', function () {
//     return view('corsi_fitness.index');
// })->name('corsifitness');

Route::get('/nuoto', function () {
    return view('nuoto.index');
})->name('nuoto');

Route::get('/rieducazionefunzionale', function () {
    return view('rieducazione_funzionale');
})->name('rieducazionefunzionale');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin')->middleware('auth');


Route::resource('/trainers','TrainerController')->middleware('auth');
Route::resource('/swimtrainers','Swim_TrainerController')->middleware('auth');
Route::resource('/courses','CourseController')->middleware('auth');
Route::resource('/posts','PostController')->middleware('auth');
Route::resource('/dates','DateController')->middleware('auth');
Route::resource('/hours','HourController')->middleware('auth');
Route::resource('/schedules','ScheduleController')->middleware('auth');
Route::get('/visualizzatrainers', 'TrainerController@trainers_admin')->name('trainers.visualizza');
Route::get('/visualizzatrainers/{slug}', 'GeneralController@trainer_singolo')->name('trainers.trainer_singolo');
Route::get('/','PostController@index_home')->name('home');
Route::get('/corsifitness', 'CourseController@visualizza_corsi')->name('corsifitness');
Route::get('/corsifitness/{slug}', 'CourseController@corso_singolo')->name('courses.corso_singolo');



Auth::routes();
