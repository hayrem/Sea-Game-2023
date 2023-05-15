<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ticket = Ticket::all();

        return response()->json(['message' => 'Successful', 'data'=>$ticket], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ticket = Ticket::create([
            'price' => $request->price,
            'schedule' => $request->schedule
        ]);

        return response()->json(['message' => 'Successful', 'data'=>$ticket], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $ticket = Ticket::find($id);

        return response()->json(['message' => 'Successful', 'data'=>$ticket], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $ticket = Ticket::find($id);

        $ticket->price = $request->price;
        $ticket->schedule = $request->schedule;

        $ticket->save();

        return response()->json(['message' => 'Successful', 'data'=>$ticket], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $ticket = Ticket::find($id);

        $ticket->delete();

        return response()->json(['message' => 'Successfully']);
    }
}
