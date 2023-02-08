<?php

namespace App\Http\Controllers;

use App\Models\ImageDevice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageDeviceController extends Controller
{

    public function index() {
        return view('imageform');
    }

    public function mostrar($id_device) {
        return ImageDevice::where('device_id', $id_device)->get();
    }

    public function guardar(Request $request) {
        return $request;
        // foreach ($files as $file) {
        //     Storage::disk('local')->put('hola.txt', $file);
        // }
    }
}
