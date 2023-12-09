<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
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

//producto
Route::get('/Productos',[ProductoController::class,'index'])->name('Producto.index');
Route::get('/Productos/crear',[ProductoController::class,'crear'])->name('Produto.crear');
Route::post('Productos/guardar',[ProductoController::class,'guardar'])->name('Producto.guardar');

Route::get('/Empleados',[EmpleadoController::class,'index'])->name('Empleado.index');
Route::get('/Empleados/crear',[EmpleadoController::class,'crear'])->name('Empleado.crear');
Route::post('Empleados/guardar',[EmpleadoController::class,'guardar'])->name('Empleado.guardar');

Route::get('/Proveedores',[ProveedorController::class,'index'])->name('Proveedores.index');
Route::get('/Proveedores/crear',[ProveedorController::class,'crear'])->name('Proveedores.crear');
Route::post('Proveedores/guardar',[ProveedorController::class,'guardar'])->name('Proveedores.guardar');
