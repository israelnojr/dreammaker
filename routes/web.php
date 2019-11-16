<?php
use App\Http\Controllers\testimonyController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'frontPageController@welcome')->name('welcome');
Route::get('outreach', 'frontPageController@outreach')->name('outreach');
Route::get('about', 'frontPageController@about')->name('about');
Auth::routes();

Route::resource('testimonies', 'testimonyController');
Route::post('subscribe', 'emailListController@emails')->name('subscribe');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('dashboard', 'dashboardController@index')->name('dashboard');
    Route::get('hero-section', 'HeroHeaderSectionController@index')->name('hero-section.index');
    Route::get('hero-section/create', 'HeroHeaderSectionController@create')->name('hero-section.create');
    Route::post('hero-section/store', 'HeroHeaderSectionController@store')->name('hero-section.store');
    Route::get('hero-section/{id}', 'HeroHeaderSectionController@edit')->name('hero-section.edit');
    Route::delete('hero-section/{id}', 'HeroHeaderSectionController@destroy')->name('hero-section.destroy');
    Route::post('hero-section/update', 'HeroHeaderSectionController@update')->name('hero-section.update');
});
