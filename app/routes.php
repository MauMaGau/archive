<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home.search');
});

Route::get('magazine', [
    'as' => 'magazine',
    'uses' => 'magazineController@index'
]);

Route::get('magazine/show/{magazineId}', [
    'as' => 'magazine.show',
    'uses' => 'magazineController@show'
]);

Route::get('page/show/{pageId}', [
    'as' => 'page.show',
    'uses' => 'pageController@show'
]);

Route::get('admin/magazine', [
    'as' => 'admin.magazine',
    'uses' => 'AdminMagazineController@index',
]);

Route::get('admin/magazine/create', [
    'as' => 'admin.magazine.create',
    'uses' => 'AdminMagazineController@create',
]);

Route::post('admin/magazine/store', [
    'as' => 'admin.magazine.store',
    'uses' => 'AdminMagazineController@store',
]);

Route::get('admin/magazine/edit/{magazineId}', [
    'as' => 'admin.magazine.edit',
    'uses' => 'AdminMagazineController@edit',
]);

Route::post('admin/magazine/update/{magazineId}', [
    'as' => 'admin.magazine.update',
    'uses' => 'AdminMagazineController@update',
]);

Route::get('admin/page/create/{magazineId}', [
    'as' => 'admin.page.create',
    'uses' => 'AdminPageController@create',
]);

Route::post('admin/page/store/{magazineId}', [
    'as' => 'admin.page.store',
    'uses' => 'AdminPageController@store',
]);

Route::get('admin/page/edit/{pageId}', [
    'as' => 'admin.page.edit',
    'uses' => 'AdminPageController@edit',
]);

Route::post('admin/page/update/{pageId}', [
    'as' => 'admin.page.update',
    'uses' => 'AdminPageController@update',
]);