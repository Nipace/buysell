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
    return view('auth.login');
});
Route::get('/admin','Admin\AdminController@index')->middleware('auth');

Auth::routes(['register' => false]);

//Roles Route
Route::get('admin/role','Admin\RoleController@index')->middleware('auth');
Route::get('/admin/role/addrole', 'Admin\RoleController@create')->middleware('auth');
Route::post('/admin/role/addrole/submit', 'Admin\RoleController@store')->middleware('auth');
Route::get('/admin/role/editrole/{id}', 'Admin\RoleController@edit')->middleware('auth');
Route::post('admin/role/editrole/{id}/submit','Admin\RoleController@update')->middleware('auth');
Route::get('/admin/role/viewpermission/{id}', 'Admin\RoleController@viewPermissions')->middleware('auth');
Route::get('admin/role/delete/{id}','Admin\RoleController@destroy')->middleware('auth');

//Permission Route
Route::get('/admin/permission','Admin\PermissionController@index')->middleware('auth');
Route::get('/admin/permission/addpermission','Admin\PermissionController@create')->middleware('auth');
Route::post('/admin/permission/addpermission/submit','Admin\PermissionController@store')->middleware('auth');
Route::get('/admin/permission/edit/{id}','Admin\PermissionController@edit')->middleware('auth');
Route::post('admin/permission/edit/{id}/submit','Admin\PermissionController@update')->middleware('auth');
Route::get('admin/permission/delete/{id}','Admin\PermissionController@destroy')->middleware('auth');

//user route
Route::get('/admin/user','Admin\UserController@index')->middleware('auth');
Route::get('/admin/user/create','Admin\UserController@create')->middleware('auth');
Route::post('/admin/user/create/submit','Admin\UserController@store')->middleware('auth');

//Real Estate Routes
Route::resource('/admin/realestate','Admin\RealEstateController');