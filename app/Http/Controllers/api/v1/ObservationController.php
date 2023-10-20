<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $observations = Observation::orderBy('owner', 'asc')->get();

        return response() 
            ->json(['data' => $observations],
                200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request = Observation::create($request->all());

        return response()
            ->json(['data' => $request],
                201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Observation $observation)
    {
        //
        return response()
            ->json(['data' => $observation],
                200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Observation $observation)
    {
        //
        $observation->update($request->all());

        return response()
            ->json(['data' => $observation],
                200);
    }

    /**
     * No tiene sentido borrar una observacion.
     */
    public function destroy(Observation $observation)
    {
        //
        // $observation->delete();

        // return response()
        //     ->json(null, 204);
    }
}
