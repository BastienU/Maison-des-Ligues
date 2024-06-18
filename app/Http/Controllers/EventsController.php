<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Message::all();
        return view('events.index', compact('events'));
    }

    public function nouveau(Request $request)
    {
        $request->validate([
            'message' => ['required', 'string'],
        ]);

        Message::create([
            'utilisateur_id' => auth()->user()->id,
            'contenu' => $request->input('message'),
        ]);

        return redirect()->route('events.index');
    }

    public function edit($id)
    {
        $event = Message::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'contenu' => 'required|string|max:255',
        ]);

        $event = Message::findOrFail($id);
        $event->contenu = $request->input('contenu');
        $event->save();

        return redirect()->route('events.index')->with('success', 'Évènement modifié avec succès.');
    }

    public function destroy($id)
    {
        $event = Message::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Évènement supprimé avec succès.');
    }
}