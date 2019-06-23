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

Route::get('/personal', function () {
    return view('personal');
})->name('personal');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin')->middleware('auth');

Route::get('/contatti', function () {
  $config['center'] = '41.710657,13.604054';
  $config['zoom'] = '16';
  //$config['width'] = '500';
  $config['scrollwheel'] = false;
  // $config['position'] = ;

  GMaps::initialize($config);

//se ne possono mettere molteplici di marker basta copiare da 44 a 48
  // $marker['position'] = '41.710657,13.604054';
  $marker['infowindows_content'] = 'mettere del testo';
  GMaps::add_marker($marker);

  $map = GMaps::create_map();

    return view('contatti')->with('map', $map);
})->name('contatti');


Route::resource('/trainers','TrainerController')->middleware('auth');
Route::resource('/swimtrainers','Swim_TrainerController')->middleware('auth');
Route::resource('/courses','CourseController')->middleware('auth');
Route::resource('/posts','PostController')->middleware('auth');
Route::resource('/dates','DateController')->middleware('auth');
Route::resource('/hours','HourController')->middleware('auth');
Route::resource('/schedules','ScheduleController')->middleware('auth');
Route::resource('/categories','CategoryController')->middleware('auth');
Route::get('/visualizzatrainers', 'TrainerController@trainers_admin')->name('trainers.visualizza');
Route::get('/visualizzatrainers/{slug}', 'GeneralController@trainer_singolo')->name('trainers.trainer_singolo');
Route::get('/','PostController@index_home')->name('home');
Route::get('/corsifitness', 'CourseController@visualizza_corsi')->name('corsifitness');
Route::post('/corsifitness/conferma', 'ContactController@richiesta_orari')->name('richiestaorari');
Route::post('/contatti/conferma', 'ContactController@richiesta_contatti')->name('richiestacontatti');
Route::get('/corsifitness/{slug}', 'CourseController@corso_singolo')->name('courses.corso_singolo');
Route::get('/posts/sg/{slug}','GeneralController@visualizza_post_singolo')->name('posts.visualizza_singolo_post');
Route::get('/cat/{slug}', 'GeneralController@innercategory')->name('innercategory');



Auth::routes();
