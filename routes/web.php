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
//Admin__________
Route::group(['middleware' => ['admin']], function()
{
    Route::get('/admin','HomeController@admin');
    Route::resource('/admin/electiva','Admin\ElectivaController');
    Route::resource('/admin/usuario','Admin\UsuariosController');
    Route::resource('/admin/profesor','Admin\ProfesorController');
});
//Estudiante_____
Route::group(['middleware' => ['estudiante']], function()
{
    Route::get('/estudiante/','HomeController@estudiante');
    Route::get('/estudiante/electivas','Estudiante\ElectivasController@index');
    Route::get('/estudiante/listado_profesor','Estudiante\ElectivasController@profesor');
    Route::get('/estudiante/listado_profesor/{id}', array(
        'as' => 'estudiante-listado_profesor',
        'uses' => 'Estudiante\ElectivasController@listados',
    ));
    Route::get('/estudiante/listado_electivas','Estudiante\ElectivasController@electivas');
    Route::get('/estudiante/listado_electivas/{id}', array(
        'as' => 'estudiante-listado_electivas',
        'uses' => 'Estudiante\ElectivasController@listado',
    ));
    Route::get('/estudiante/electivas/{id}', array(
        'as' => 'estudiante/electivas',
        'uses' => 'Estudiante\ElectivasController@create',
    ));

});
//Estudiante_____
Route::group(['middleware' => ['usuario']], function()
{
    Route::get('/usuario','HomeController@usuario');
    Route::resource('/usuario/estudiantes','User\UsuarioController');
});
Route::get('/home', 'HomeController@index')->name('home');