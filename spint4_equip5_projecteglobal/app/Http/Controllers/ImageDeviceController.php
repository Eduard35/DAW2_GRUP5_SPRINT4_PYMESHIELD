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
        //TODO: Aquí hem de mostrar TOTES les imatges, no només una
        $files = ImageDevice::where('device_id', $id_device)->get();
        foreach ($files as $file) {
            echo "<img src='". asset(str_replace('storage/public/', 'storage/', $file->location)) ." '>";
        }
    }

    public function guardar(Request $request) {

        // Validem que la imatge sigui correcta
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);

        // Guardem l'arxiu i recuperem la ruta
        $files = $request->file('files');
        //Storage::disk('local')->put('test', $files);

        foreach ($files as $file) {
            $route = $file->store('public/images');

            // Guardem a la base de dades la ruta a aquesta imatge
            ImageDevice::create([
                'location' => 'storage/' . $route,
                'device_id' => 1
            ]);
        }

    }
}
