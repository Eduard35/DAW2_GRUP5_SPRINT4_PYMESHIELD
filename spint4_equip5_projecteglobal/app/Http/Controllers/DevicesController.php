<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DevicesController extends Controller
{
    public function mostrarDispositivos(){
        $dispositivos = Device::all();
        $dispositivos = Device::whereIn('type_device_id', $dispositivos->pluck('type_device_id'))->paginate(10);
        return view("mostrarDispositivos", compact('dispositivos'));
    }
    
    public function crear(){
        
    }

    public function modificar(){
        
    }

    public function eliminar(){

    }
}
