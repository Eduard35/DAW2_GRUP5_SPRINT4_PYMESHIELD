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

    // Funcio per a restaurar
    public function restaurar(){

        $restaurar = Device::update(['hidden', date('Y-m-d')]);
        return redirect('/restaurar');
    }
}

//get, patch,
