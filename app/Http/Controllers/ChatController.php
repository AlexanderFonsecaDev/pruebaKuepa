<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->get('message');
        $user = User::find(Auth::id());

        Chat::create([
            'user_id' => $user->id,
            'message' => $message
        ]);

        event(new ChatEvent($message,$user));
    }

}
