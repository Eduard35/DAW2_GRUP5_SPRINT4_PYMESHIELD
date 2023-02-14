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
    
    public function crear(Request $request){
        $dispositiu = new Device;
        $dispositiu->brand = $request->input('brand');
        $dispositiu->model = $request->input('model');
        $dispositiu->mac_ethernet = $request->input('mac_ethernet');
        $dispositiu->mac_wifi = $request->input('mac_wifi');
        $dispositiu->description = $request->input('description');
        $dispositiu->state = $request->input('state');
        $dispositiu->serial_number = $request->input('serial_number');
        $dispositiu->type_device_id = $request->input('type_device_id');
        $dispositiu->save();

        return redirect()->route('products.index')->with('success', 'Dispositivo creado satisfactoriamente');
    }

    public function modificar(Request $request, $id){
        $dispositiu = Device::find($id);
        dd($id);
        $dispositiu->brand = $request->input('brand');
        $dispositiu->model = $request->input('model');
        $dispositiu->mac_ethernet = $request->input('mac_ethernet');
        $dispositiu->mac_wifi = $request->input('mac_wifi');
        $dispositiu->description = $request->input('description');
        $dispositiu->state = $request->input('state');
        $dispositiu->serial_number = $request->input('serial_number');
        $dispositiu->type_device_id = $request->input('type_device_id');
        $dispositiu->save();

        return redirect()->route('products.index')->with('success', 'Dispositivo modificat satisfactoriamente');
    }

    public function eliminar(){

    }
}
