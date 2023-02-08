<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;


class InventoryController extends Controller
{
    public function inventario(){
<<<<<<< HEAD
        $dispositivosInventario = Device :: all();
=======
        $dispositivosInventario = Device::all();
>>>>>>> 93f9b97356b434e366d2c4f54c09f7b2a1681ca5
        $dispositivosInventario = Device::whereIn('type_device_id', $dispositivosInventario->pluck('type_device_id'))->paginate(10);
        return view("inventario", compact('dispositivosInventario'));
    }
}
