<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class InventoryController extends Controller
{
        public function inventario(){
        $idUser = 8;//Aquí es possara la variable de sessióque contingui el id de la sessió.
        $dispositivosInventario = Device::where('user_id', $idUser)->get();
        $dispositivosInventario = Device::whereIn('type_device_id', $dispositivosInventario->pluck('type_device_id'))->paginate(10);
        return view("inventario", compact('dispositivosInventario'));
    }
}
