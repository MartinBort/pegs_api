<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Event;

class EventsController extends Controller
{

    public function index()
    {
        //
        $events = Event::all();

        //dd($events);
        return $events;
    }

    public function create()
    {
        //
        return view('events.create');
    }

    public function store(Request $request)
    {
        //
        //return $request->all();

        $event = new Event;
        $event->user_id             = Auth::user()->id;
        $event->event_name          = $request->event_name;
        $event->event_date_start    = $request->event_date_start;
        $event->event_date_end      = $request->event_date_end;
        $event->event_time_start    = $request->event_time_start;
        $event->event_time_end      = $request->event_time_end;
        $event->event_text          = $request->event_text;

        $event->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
