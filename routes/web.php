<?php

use App\sharing;
use Illuminate\Support\Facades\Route;

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

Route::get('/','BasicController@index');
Route::group(['prefix' => 'sharing'], function () {
    Route::get('create','SharingController@create')->name('sharing.create');
    Route::get('show','SharingController@show')->name('sharing.show');
Route::post('store', 'SharingController@store')->name('sharing.store');
//    Route::post('/post-data','SharingController@nn')->name('postData');

});
Route::get('/view/{sharing_id}','SomeController@view')-> name('view-show');
Route::get('/view-motion/{sharing_id}','SomeController@viewmotion');
Route::get('/view-line/{sharing_id}','SomeController@viewline');
Route::get('/view-photo/{sharing_id}','SomeController@viewphoto');
Route::get('/view-video/{sharing_id}','SomeController@viewvideo');
Route::get('/view-info/{sharing_id}','SomeController@viewenfo');


Route::get('/view-vote/{sharing_id}',function ($sharing_id){
    return view('sharing.vote',compact('sharing_id'));

});
Route::post('store', 'VoteController@store')->name('vote.store');
Route::get('/show-rang','VoteController@index');

Route::post('filter-data-video', 'SharingController@filterDataVideo');
Route::post('filter-data-photo', 'SharingController@filterDataPhoto');



//Route::get('/view-filter/{sharing_id}', function ($sharing_id)
//
//{
//    $data = sharing::pluck('id', 'edu_share')->all();
//
//
//    return view('sharing.video', compact('filter_share' ));
//
//});


