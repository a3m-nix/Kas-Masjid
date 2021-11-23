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

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::resource('masjid', MasjidController::class);
});

//GET       URL: masjid              route : masjid.index            method: index
//GET       URL: masjid/create       route : masjid.create           method: create
//POST,     URL: masjid              route : masjid.store            method: store
//GET,      URL: masjid/{id}/edit    route : ['masjid.edit', $id]    method: edit($id)
//PUT,      URL: masjid/update/{id}  route : ['masjid.update', $id]  method: update($id)
//DELETE,   URL: masjid/{id}         route : ['masjid.destroy', $id] method: destroy($id)
//GET,      URL: masjid/{id}         route : ['masjid.show',$id]     method: show($id)
