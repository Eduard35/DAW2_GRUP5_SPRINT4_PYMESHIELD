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
        return asset('storage/images/7k6YFGtzHyvadgeXj5sIC43Ah0FNtIqcjYX6rEZ2.png');
        //return Storage::url('public/images/0DSXCM3MQiWNqawwRuBhSkZl3dFyQdJrqSDTZgqo.jpg');
        //return "<img src='". Storage::url('app/public/images/7k6YFGtzHyvadgeXj5sIC43Ah0FNtIqcjYX6rEZ2.jpg')  ." '>";
        //return '<img src="/storage/images/7k6YFGtzHyvadgeXj5sIC43Ah0FNtIqcjYX6rEZ2.jpg">';
        //return ImageDevice::where('device_id', $id_device)->get();
    }

    public function guardar(Request $request) {

        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $route = $request->file('file')->store('public/images');
        ImageDevice::create([
            'location' => $route,
            'device_id' => 1
        ]);
        //Storage::disk('local')->put("images", $file);
    }
}
