<?php

namespace App\Http\Controllers;

use App\Models\Message;

class EventsController extends Controller
{
    public function nouveau()
    {
        // dump("Nouvelle publication");
        request()->validate([
            'message' => ['required'],             
        ]);
        
        Message::create([
            'utilisateur_id' => auth()->user()->id,
            'contenu' => request('message'),
        ]);

        $events = Message::all();

        return view('events', [
            'events' => $events,
        ]);
    }
}
