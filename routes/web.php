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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subjects','SubjectController@index');
Route::get('/subjects/add','SubjectController@add');
Route::post('/subjects/store','SubjectController@store');
Route::post('/subjects/update','SubjectController@update');
Route::post('/subjects/up','SubjectController@up');
Route::post('/subjects/delete','SubjectController@delete');

Route::get('/guides','GuideController@index');
Route::get('/guides/add','GuideController@add');
Route::post('/guides/store','GuideController@store');
Route::post('/guides/update','GuideController@update');
Route::post('/guides/up','GuideController@up');
Route::post('/guides/delete','GuideController@delete');

Route::get('/teams','TeamController@index');
Route::post('/teams/add','TeamController@add');
Route::get('/synopsis','TeamController@synopsis');
Route::post('/uploadfile','TeamController@storeUploadFile');
Route::get('/report1','TeamController@report');
Route::post('/uploadfile1','TeamController@storeUploadFile1');

Route::get('/teamsview','ViewController@index');
Route::post('/team/view','ViewController@viewteam');
Route::get('/synopsisview/{id}','ViewController@viewsynopsis');
Route::get('/reportview/{id}','ViewController@viewreport');
Route::get('/teamsadmin','ViewController@teamsadmin');
Route::get('/subview/{sub}','ViewController@teamview');
Route::post('/adminteam/view','ViewController@adminteam');

Route::get('/schedulehome','ScheduleController@index');
Route::get('/schedule','ScheduleController@add');
Route::post('/schedule/store','ScheduleController@store');
Route::post('/schedule/update','ScheduleController@update');
Route::post('/schedule/up','ScheduleController@up');
Route::post('/schedule/delete','ScheduleController@delete');

Route::get('/report','ViewController@report');
