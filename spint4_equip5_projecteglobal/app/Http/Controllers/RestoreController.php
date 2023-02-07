<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class RestoreController extends Controller
{

    //Funcio per a llistar
    public function listar(){

        $listar = Device::all()->where("hidden", "!=", null);
        return view("restaurar", compact("listar"));
    }

    public function restaurar(){

    }
}

//get, patch,
