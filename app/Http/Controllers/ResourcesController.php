<?php

namespace App\Http\Controllers;

use App\rooms;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $userRooms = rooms::where('user_id', auth()->user()->id)->latest()->get();
        return view('resources.resource', compact('userRooms'));
    }
    public function stories(Request $request)
    {
        return view('resources.stories');
    }
    public function vendors(Request $request)
    {
        return view('resources.vendors');
    }
    public function addStory(Request $request)
    {
        return view('resources.addStory');
    }
}
