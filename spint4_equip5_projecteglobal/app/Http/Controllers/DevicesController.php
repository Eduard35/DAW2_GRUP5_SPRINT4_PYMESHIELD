<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\ImageDevice;

class DevicesController extends Controller
{
    //Funcio per a llistar
    public function mostrarDispositivos(){
        $dispositivos = Device::where('hidden', '=', null)
            ->paginate(10);
        return view("mostrarDispositivos", compact('dispositivos'));
    }

    //Funcio per a mostrar fotos
    public function show($id_device) {
        $device = Device::find($id_device);
        $files = ImageDevice::select('location')->where('device_id', $id_device)->get();
        return view('images', compact('files', 'device'));
    }
    
    //Funcio per a crer dispositiu, recuperem informacio dels inputs del modal simplementt inserir
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

        return back();
    }

    //Funcio per a modificar dispositiu, recuperem informacio dels inputs del modal i fer update
    public function modificar(Request $request, $id){
        $dispositiu = Device::find($id);
        $dispositiu->brand = $request->input('brand');
        $dispositiu->model = $request->input('model');
        $dispositiu->mac_ethernet = $request->input('mac_ethernet');
        $dispositiu->mac_wifi = $request->input('mac_wifi');
        $dispositiu->description = $request->input('description');
        $dispositiu->state = $request->input('state');
        $dispositiu->serial_number = $request->input('serial_number');
        $dispositiu->type_device_id = $request->input('type_device_id');
        $dispositiu->save();

        return back();
    }

    //Funcio per a eliminar dispositiu, assigna un valor a hidden és la data en el moment que és clica el boto
    public function eliminar($id){
        $dispositiu = Device::find($id);
        $dateNow = date('Y-m-d');
        $dispositiu->hidden = $dateNow;
        $dispositiu->save();

        return back();
    }
}
