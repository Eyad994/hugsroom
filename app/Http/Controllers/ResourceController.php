<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\rooms;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $resources = Resource::latest()->get();
        $userRooms = rooms::where('user_id', auth()->user()->id)->latest()->get();
        return view('resources.resource', compact('userRooms', 'resources'));
    }
    public function stories($id)
    {
        $resource = Resource::where('id', $id)->first();
        return view('resources.stories', compact('resource'));
    }
    public function vendors(Request $request)
    {
        return view('resources.vendors');
    }
    public function addStory(Request $request)
    {
        return view('resources.addStory');
    }

    public function storeStory(Request $request)
    {
        $request->validate([
           'image' => 'required|file',
            'title' => 'required',
            'description' => 'required',
        ]);

        $file = request()->file('image');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploads/resources/', $fileName);

        Resource::create([
           'user_id' => auth()->id(),
           'title' => $request->title,
           'description' => $request->description,
           'image' => $fileName,
        ]);

        return redirect('/resources');
    }
}
