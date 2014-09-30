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

Route::get('admin/magazine', [
    'as' => 'admin.magazine',
    'uses' => 'AdminMagazine@index',
]);

Route::get('admin/magazine/create', [
    'as' => 'admin.magazine.create',
    'uses' => 'AdminMagazine@create',
]);

Route::post('admin/magazine/store', [
    'as' => 'admin.magazine.store',
    'uses' => 'AdminMagazine@store',
]);

Route::get('admin/magazine/edit/{magazineId}', [
    'as' => 'admin.magazine.edit',
    'uses' => 'AdminMagazine@edit',
]);

Route::post('admin/magazine/update/{magazineId}', [
    'as' => 'admin.magazine.update',
    'uses' => 'AdminMagazine@update',
]);