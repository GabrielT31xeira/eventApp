<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = request('search');

        if($search){
            $events = Event::where([
                ['title','like','%'.$search.'%'],
            ])->get();

        }else{
            $events = Event::all();
        }

        return view('vereventos', ['events' => $events, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->remote = $request->remote;
        $event->items = $request->items;

        
        //img upload
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $requestIMG = $request->image; 
            $extension = $requestIMG->extension();
            $imageName = md5($requestIMG->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestIMG->move(public_path('img/events'), $imageName);
            
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        
        $event = Event::findOrFail($id);

        if ($user->id != $event->user_id) {
            return redirect('/dashboard');
        }

        return view('events.edit', ['event' => $event]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $requestIMG = $request->image; 
            $extension = $requestIMG->extension();
            $imageName = md5($requestIMG->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestIMG->move(public_path('img/events'), $imageName);
            
            $data['image'] = $imageName;
        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso.');
    }

    public function dashboard()
    {

        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipantes = $user->eventsAsParticipantes;

        return view('events.dashboard', 
        ['events'=>$events, 'eventsAsParticipantes' => $eventsAsParticipantes]);

    }

    public function joinEvent($id)
    {

        $user = auth()->user();

        $user->eventsAsParticipantes()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença foi comfirmada ' . $event->title);
    }
}
