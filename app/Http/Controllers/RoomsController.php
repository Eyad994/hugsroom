<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Like;
use App\Post;
use App\rooms;
use App\Visitor;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class RoomsController extends Controller
{

    /**
     * RoomsController constructor.
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function addNewRoom(Request $request)
    {
        $data = [];
        $data["roomForMe"] = $request->roomForMe; // 1- for me 0- for someone else
        $data["firstName"] = $request->firstName;
        $data["lastName"] = $request->lastName;
        $data["roomTitle"] = $request->title;
        $data["roomLink"] = $request->roomLink;
        $data["howSeeMyRoom"] = $request->howSeeMyRoom;
        $data["searchable"] = $request->searchable;//1-yes 0-no*/

        $room = new rooms();
        $room->addRome($data);
        die();

    }

    public function rooms()
    {
        $userRooms = rooms::where('user_id', auth()->user()->id)->latest()->get();
        return view('main.rooms', compact('userRooms'));
    }

    public function room($id)
    {
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor))
        {
            Visitor::create([
                'ip' => request()->ip(),
                'room_id' => $id
            ]);
        }

        $uniqueVisitorCount = Visitor::where('room_id', $id)->count();


        $room->update([
            'non_unique_visitor' => ++$nonUniqueVisitor,
            'unique_visitor' => $uniqueVisitorCount
        ]);

        $post = Post::where('room_id', $id)
            ->withLikes()
            ->latest()
            ->first();
        $postLikes = Like::where('post_id', $post->id)->count();
        return view('main.room', compact('room', 'post', 'postLikes'));
    }

    public function mbroom($id)
    {
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor))
        {
            Visitor::create([
                'ip' => request()->ip(),
                'room_id' => $id
            ]);
        }

        $uniqueVisitorCount = Visitor::where('room_id', $id)->count();

        $room->update([
            'non_unique_visitor' => $nonUniqueVisitor,
            'unique_visitor' => $uniqueVisitorCount
        ]);

        $post = Post::where('room_id', $id)
            ->withLikes()
            ->latest()
            ->first();
        $postLikes = Like::where('post_id', $post->id)->count();

        return view('main.mbroom', compact('room', 'post', 'postLikes'));
    }

public function gallery($id)
    {/*
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor))
        {
            Visitor::create([
                'ip' => request()->ip(),
                'room_id' => $id
            ]);
        }

        $uniqueVisitorCount = Visitor::where('room_id', $id)->count();


        $room->update([
            'non_unique_visitor' => ++$nonUniqueVisitor,
            'unique_visitor' => $uniqueVisitorCount
        ]);

        $post = Post::where('room_id', $id)
            ->withLikes()
            ->latest()
            ->first();
        $postLikes = Like::where('post_id', $post->id)->count();*/
        return view('main.gallery');
    }

    public function mbgallery($id)
    {
        /*
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor))
        {
            Visitor::create([
                'ip' => request()->ip(),
                'room_id' => $id
            ]);
        }

        $uniqueVisitorCount = Visitor::where('room_id', $id)->count();

        $room->update([
            'non_unique_visitor' => ++$nonUniqueVisitor,
            'unique_visitor' => $uniqueVisitorCount
        ]);

        $post = Post::where('room_id', $id)
            ->withLikes()
            ->latest()
            ->first();
        $postLikes = Like::where('post_id', $post->id)->count();*/

        return view('main.mbgallery');
    }


    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'room_id' => 'required'
        ]);

        Post::create($request->all());

        return back();
        //return redirect()->route('posts.index');
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();
    }
}
