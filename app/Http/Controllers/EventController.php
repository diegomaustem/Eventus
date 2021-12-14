<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('index', ['events' => $events]);
         

    }

    public function create(){

        return view('events.create');

    }

    public function store(Request $request){
        
        $events = new Event;

        $events->title = $request->title;
        $events->city = $request->city;
        $events->private = $request->private;
        $events->description = $request->description;

        $events->save();

        return redirect('/');
    }
}
