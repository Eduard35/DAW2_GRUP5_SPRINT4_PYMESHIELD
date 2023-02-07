<?php

namespace App\Http\Controllers;

use App\Models\ImageDevice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageDeviceController extends Controller
{
    public function mostrar($id_device) {
        return ImageDevice::where('device_id', $id_device)->get();
    }

    public function guardar(Request $request) {
        Storage::disk('local')->put('hola.txt', 'hola');
    }
}
