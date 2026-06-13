<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //
    public function index()
    {

        $user = Auth::user();
        return view('dashboard.notifications.index', ['notifications' => $user->notifications()->paginate()]);
    }
    public function read(string $id)
    {
        $user = Auth::user();
        $user->unreadNotifications()->findOrFail($id)->markAsRead();
        return redirect()->back();
    }
    public function unread(string $id)
    {
        $user = Auth::user();
        $user->readNotifications()->findOrFail($id)->markAsUnread();
        return redirect()->back();
    }
    public function destroy(string $id)
    {
        $user = Auth::user();
        $user->notifications() - findOrFail($id)->delete();
        return redirect()->back();
    }
}
