<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DevicesController extends Controller
{
    public function mostrarDispositivos(){
        $dispositivos = Device::all();
        return view("mostrarDispositivos", compact('dispositivos'));
    }
    
    public function crear(){
        
    }

    public function modificar(){
        
    }

    public function eliminar(){

    }
}
