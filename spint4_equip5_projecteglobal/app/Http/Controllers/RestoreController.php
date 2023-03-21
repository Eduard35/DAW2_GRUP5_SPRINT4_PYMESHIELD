<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class RestoreController extends Controller
{

    //Funcio per a llistar
    public function listar(){

        $listar = Device::where("hidden", "!=", null)->paginate(5);
        return view("restaurar", compact("listar"));
    }

    // Funcio per a restaurar
    public function restaurar($id){
        $dispositivo = Device::find($id);
        $dateNow = null;
        $dispositivo->hidden = $dateNow;
        $dispositivo->save();

        return back();
    }
}
