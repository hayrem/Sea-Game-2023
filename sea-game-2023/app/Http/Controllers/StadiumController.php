<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stadium = Stadium::all();

        return response()->json(['message' => 'Success', 'data' => $stadium], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $stadium = Stadium::create(
            [
                'name' => $request->name,
                'zone' => $request->zone
            ]
        );
        return response()->json(['message' => 'Success', 'data' => $stadium], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $stadium = Stadium::find($id);

        return response()->json(['message' => 'Success', 'data' => $stadium], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $stadium = Stadium::find($id);

        $stadium->name = $request->name;
        $stadium->zone = $request->zone;

        $stadium->save();

        return response()->json(['message' => 'Success', 'data' => $stadium], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $stadium = Stadium::find($id);

        $stadium->delete();

        return response()->json(['message' => 'Success'], 200);
    }
}
