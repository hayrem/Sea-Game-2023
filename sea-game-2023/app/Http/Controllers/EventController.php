<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $event = Event::all();

        return response()->json(['success' => true, 'data' => $event], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $event = Event::create([
            'name' => $request->name,
            'type' => $request->type,
            'available_ticket' => $request->available_ticket,
            'stadium_id' => $request->stadium_id
        ]);

        return response()->json(['message' => 'Success', 'data' => $event], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $event = Event::find($id);

        return response()->json(['message' => 'Success', 'data' => $event], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $event = Event::find($id);

        $event->name = $request->name;
        $event->type = $request->type;
        $event->available_ticket = $request->available_ticket;
        $event->stadium_id = $request->stadium_id;

        $event->save();

        return response()->json(['message'=>'Success', 'data'=>$event], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $event = Event::find($id);

        $event->delete();

        response()->json(['message' => 'Success'], 200);
    }
}
