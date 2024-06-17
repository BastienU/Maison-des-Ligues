<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau()
    {
        if(auth()->guest())
        {
            return redirect('/connexion');
        }

        request()->validate([
            'message' => ['required'],
        ]);

        Message::create([
            'utilisateur_id' => auth()->id,
            'contenu' => request('message'),
        ]);

        return back();
    }
}
