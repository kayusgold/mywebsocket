<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $message = $request->message;
        event(new \App\Events\RealTimeMessage("Received: $message"));
        return response()->json([], 200);
    }
}
