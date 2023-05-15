<?php

namespace App\Http\Controllers;

use App\Models\Matching;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatchingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matching = Matching::all();

        return response()->json(['success' => true, 'data' => $matching], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'time' => 'required'
        ]);
        if($validator->fails()) {
            return $validator->errors();
        }
        else {
            $matching = Matching::create([
                'title' => $request->title,
                'time' => $request->time
            ]);
            return response()->json(['success' => true, 'data' => $matching], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $matching = Matching::find($id);

        return response()->json(['success'=>true, 'data'=>$matching], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $matching = Matching::find($id);

        $matching->title = $request->title;
        $matching->time = $request->time;

        $matching->save();

        return response()->json(['message'=>'success', 'data'=>$matching], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $matching = Matching::find($id);

        $matching->delete();

        return response()->json(['message' => 'Successfully'], 200);
    }
}
