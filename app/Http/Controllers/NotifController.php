<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notification;

class NotifController extends Controller
{
    public function index()
    {
        $notifications = Notification::where('user_id',auth()->id())->orderBy('created_at','desc')->paginate(15);
        return view('author.notifications')->with('notifications',$notifications);
    }
}
