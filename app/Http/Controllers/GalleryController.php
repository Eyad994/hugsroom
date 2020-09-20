<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function store($id, Request $request)
    {
        $file = request()->file('image');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploads/gallery/'.$id.'/', $fileName);

        Gallery::create([
           'room_id' => $id,
            'image' => $fileName
        ]);
        return $request->all();
    }
}
