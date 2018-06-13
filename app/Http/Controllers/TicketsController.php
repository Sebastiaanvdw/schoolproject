<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketsPost;
use App\Http\Requests\UpdateTicketsPost;
use Illuminate\Http\Requests;

use App\ticket;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = ticket::orderBy('created_at', 'asc')->get();

        return view('event.tickets.index', compact('tickets'));
    }

    public function create(ticket $ticket)
    {
        return view('event.tickets.create', compact('ticket'));
    }

    public function store(StoreTicketsPost $request)
    {
        $ticket = new ticket();
        $ticket->name = request('name');
        $ticket->begintime = request('begintime');
        $ticket->endtime = request('endtime');
        $ticket->age = request('age');
        $ticket->save();

        return redirect()->action('TicketsController@index')->with('Succes', 'ticket geplaatst.');
    }

    public function show(ticket $ticket)
    {

        return view('event.tickets.show', compact('ticket'));

    }

    public function edit(ticket $ticket)
    {
        return view('event.tickets.edit',  compact('ticket'));
    }

    public function update(UpdateTicketsPost $request, ticket $ticket)
    {
        $ticket->name = $request->name;
        $ticket->begintime = $request->begintime;
        $ticket->endtime = $request->endtime;
        $ticket->age = $request->age;
        $ticket->save();

        return redirect()->action('TicketsController@index')->with('Correct', 'tickets Updated');
    }

    public function destroy($id)
    {
        $ticket = ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->action('TicketsController@index');
    }
}
