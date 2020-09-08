<?php

namespace App\Http\Controllers;

use App\rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

    public function addNewRoom(Request $request){

        $data = [];
        $data["roomForMe"]      =  $request->roomForMe ; // 1- for me 0- for someone else
        $data["firstName"]      =  $request->firstName ;
        $data["lastName"]       =  $request->lastName ;
        $data["roomTitle"]      =  $request->title ;
        $data["roomLink"]       =  $request->roomLink ;
        $data["howSeeMyRoom"]   =  $request->howSeeMyRoom ;
        $data["searchable"]     =  $request->searchable ;//1-yes 2-no*/

        $room = new rooms();
        $room->addRome($data);
        die();

    }
}
