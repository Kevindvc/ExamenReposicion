<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleados=Empleado::all();

        return view('Empleados.Empleado',compact('empleados'));


    }

    public function crear(){

        return view('Empleados.CrearEmpleado');
    }

    public function guardar(Request $request){

        $empleado= new Empleado;

        $empleado->nombre=$request->nombre;
        $empleado->apellido=$request->apellido;
        $empleado->fechaIngreso=$request->fechaIngreso;
        $empleado->salario=$request->salario;
        $empleado->save();
        return redirect()->route('Empleado.index');

    }
}
