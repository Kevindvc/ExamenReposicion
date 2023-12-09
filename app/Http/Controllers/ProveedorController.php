<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){
        $proveedores=Proveedor::all();

        return view('Proveedores.Proveedor',compact('proveedores'));


    }

    public function crear(){

        return view('Proveedores.CrearProveedor');
    }

    public function guardar(Request $request){

        $proveedor= new Proveedor;

        $proveedor->nombre=$request->nombre;
        $proveedor->FechaRegistro=$request->FechaRegistro;
        $proveedor->telefono=$request->telefono;
        $proveedor->correo=$request->correo;
        $proveedor->save();
        return redirect()->route('Proveedores.index');

    }
}
