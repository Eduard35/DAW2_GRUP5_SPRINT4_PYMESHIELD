<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function inventario(){
        return view("inventario");
    }

    public function mostrarDispositivos(){
        return view("mostrarDispositivos");
    }

    public function restaurar(){
        return view("restaurar");
    }

    public function hiddenDevices() {
        $hidden_devices = Device::all()->where('hidden', 'is not', null);
        return $hidden_devices;
    }
}
