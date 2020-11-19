<?php

namespace App\Http\Controllers;

use App\Friends;
use App\User;
use Illuminate\Support\Facades\Auth;




use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {

        return view('Chat');
    }
    public function onlineUser()
    {
        $friends = Friends::where('friend_id', Auth::user()->id)->get();


        if ($friends) {
            $OnlineUser = array();
            foreach ($friends as $friend) {
                if ($friend->isOnline()) {
                    $OnlineUser[] = $friend->user;
                }
            }
            return response()->json(['onlineFR' => $OnlineUser]);
        }
    }
}
