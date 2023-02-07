<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;


class InventoryController extends Controller
{
    public function inventario(){
        $dispositivosInventario = Device :: all();
        // $dispositivosInventario = Device::whereIn('id', $dispositivosInventario->pluck('id'))->paginate(10);
        return view("inventario", compact('dispositivosInventario'));
    }
}
