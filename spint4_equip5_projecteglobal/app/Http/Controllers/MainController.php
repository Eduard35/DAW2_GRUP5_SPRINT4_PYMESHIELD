<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function inventario(){
        return view("inventario");
    }

    public function mostrarDispositivos(){
        return view("mostrarDispositivos");
    }

    public function mostrarLista(){
        return view("mostrarLista");
    }

    public function hiddenDevices() {
        
    }
}
