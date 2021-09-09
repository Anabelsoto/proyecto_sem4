<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('usuario','UsuarioController@index');
Route::get('cliente','ClienteController@index');
Route::get('proveedor','ProveedorController@index');
Route::get('producto','ProductoController@index');
Route::get('venta','VentaController@index');
Route::get('compra','CompraController@index');
Route::get('venta_detalle','Venta_detalleController@index');
Route::get('compra_detalle','Compra_detalleController@index');

Route::get('usuario_insertar','UsuarioController@insertar');
Route::get('cliente_insertar','ClienteController@insertar');
Route::get('proveedor_insertar','ProveedorController@insertar');
Route::get('producto_insertar','ProductoController@insertar');
Route::get('venta_insertar','VentaController@insertar');
Route::get('compra_insertar','CompraController@insertar');
Route::get('venta_detalle_insertar','Venta_detalleController@insertar');
Route::get('compra_detalle_insertar','Compra_detalleController@insertar');

Route::get('usuario_actualizar','UsuarioController@actualizar');
Route::get('cliente_actualizar','ClienteController@actualizar');
Route::get('proveedor_actualizar','ProveedorController@actualizar');
Route::get('producto_actualizar','ProductoController@actualizar');
Route::get('venta_actualizar','VentaController@actualizar');
Route::get('compra_actualizar','CompraController@actualizar');
Route::get('venta_detalle_actualizar','Venta_detalleController@actualizar');
Route::get('compra_detalle_actualizar','Compra_detalleController@actualizar');

Route::get('cliente_saludo','ClienteController@saluda');