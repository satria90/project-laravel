<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Notification extends Controller
{
    public function ChangeStatusRead($id)
    {
        $notification = Notifications::find($id);
        $notification->status = 'readed';
        $notification->save();
        return Redirect::back();
    }
}
