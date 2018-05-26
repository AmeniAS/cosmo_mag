<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web,blogger');
    }

    public function mark_as_read(DatabaseNotification $notification)
    {
        $notification->markAsRead();
        return redirect()->back();
    }
}
