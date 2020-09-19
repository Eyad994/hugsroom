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
        return view('rooms.rooms', compact('userRooms'));
    }

    public function room($id)
    {
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor)) {
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
        if (!is_null($post)) {
            $postLikes = Like::where('post_id', $post->id)->count();
            return view('rooms.room', compact('room', 'post', 'postLikes'));
        }
        return view('rooms.room', compact('room', 'post'));
    }

    public function mbroom($id)
    {
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor)) {
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

        $posts = Post::where('room_id', $id)
            ->with('likes')
            ->latest()
            ->get()
        ->unique('id');

        /*if (!is_null($post)) {
            $postLikes = Like::where('post_id', $post->id)->count();
            return view('mbRooms.mbroom', compact('room', 'post', 'postLikes'));
        }*/
        return view('mbRooms.mbroom', compact('room', 'posts'));
    }

    public function gallery($id)
    {
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor)) {
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

        return view('rooms.gallery', compact('room'));
    }

    public function mbgallery($id)
    {
        $room = rooms::where('id', $id)->first();
        $nonUniqueVisitor = $room->non_unique_visitor;
        $visitor = Visitor::where('ip', request()->ip())->where('room_id', $id)->first();

        if (is_null($visitor)) {
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

        return view('mbRooms.mbgallery', compact('room'));
    }


    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'room_id' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('mbRoom', $request->room_id);
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

    public function uploadBackground($id, Request $request)
    {
        $file = request()->file('background-image');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploads/background/', $fileName);
        rooms::where('id', $id)->update([
            'cover_image' => $fileName
        ]);

        return $request->all();
    }

    public function uploadProfileImage($id, Request $request)
    {
        $file = request()->file('file');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./uploads/profile/', $fileName);
        rooms::where('id', $id)->update([
            'profile_image' => $fileName
        ]);

        return $request->all();
    }

    public function wellWishes($id)
    {
        $room = rooms::where('id', $id)->first();

        $post = Post::where('room_id', $id)
            ->withLikes()
            ->latest()
            ->first();
        if (!is_null($post)) {
            $postLikes = Like::where('post_id', $post->id)->count();
            return view('rooms.wellWishes', compact('room', 'post', 'postLikes'));
        }
        return view('rooms.wellWishes', compact('room', 'post'));
    }

    public function mbwellWishes($id)
    {
        $room = rooms::where('id', $id)->first();

        $post = Post::where('room_id', $id)
            ->withLikes()
            ->latest()
            ->first();
        if (!is_null($post)) {
            $postLikes = Like::where('post_id', $post->id)->count();
            return view('mbRooms.mbwellWishes', compact('room', 'post', 'postLikes'));
        }
        return view('mbRooms.mbwellWishes', compact('room', 'post'));
    }

    public function addJournal($id)
    {
        $room = rooms::where('id', $id)->first();
        return view('mbRooms.addJournal', compact('room'));
    }

    public function journal($id, $postId)
    {
        $room = rooms::where('id', $id)->first();

        $post = Post::where('id', $postId)
            ->withLikes()
            ->latest()
            ->first();
        if (!is_null($post)) {
            $postLikes = Like::where('post_id', $post->id)->count();
            return view('mbRooms.journal', compact('room', 'post', 'postLikes'));
        }
        return view('mbRooms.journal', compact('room', 'post'));
    }

}
