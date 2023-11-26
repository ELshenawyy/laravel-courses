<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index() {
        // $events = Event::all();
        $events = Event::orderBy('id' , 'desc')->simplePaginate(12);
        return view('pages.events' , compact('events'));
    }   

    // Add New Course
    public function store(Request $request) {
        // Validate Form Data
        $request->validate([
            'title' => 'required|max:24' ,
            'speaker' => 'required' , 
            'price' => 'required' , 
            'desc' => 'required' ,
        ]);
        //  Create New Object
        $event = new Event();
        $event->title = $request->title;
        $event->speaker = $request->speaker;
        $event->price = $request->price;
        $event->desc = $request->desc;

        //  Save Course
        $event->save();
        // Redirect /events
        return redirect('/events');
    }
    // show Details
    public function show($id){
        $event = Event::find($id);
        return view('pages.show' , compact('event'));
    }
    // Update Course
    public function edit($id){
        $event = Event::find($id);
        return view('pages.edit' , compact('event'));

    }
    public function update($id , Request $request){
        $request->validate([
            'title' => 'required|max:24' ,
            'speaker' => 'required' , 
            'price' => 'required' , 
            'desc' => 'required' ,
        ]);

        $event = Event::find($id);
        $event->title = $request->title;
        $event->speaker = $request->speaker;
        $event->price = $request->price;
        $event->desc = $request->desc;
        //  Save Course
        $event->save();
        // Redirect /events
        return redirect('/events');
    }
     // Delete Course
     public function destroy($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/events');
    }

}  