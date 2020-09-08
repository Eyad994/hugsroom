<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class rooms extends Model
{
    public function addRome($data){
        DB::table('rooms')->insert(
            [
                'title'         => $data['roomTitle'],
                'privacy_id'    => $data['howSeeMyRoom'],
                'link'          => $data['roomLink'],
                'first_name'    => $data['firstName'],
                'last_name'     => $data['lastName'],
                'searchable'    => $data['searchable'],
                'user_id'       => auth()->user()->id
            ]
        );
        return;
    }
}
