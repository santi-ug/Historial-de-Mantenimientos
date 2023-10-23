<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\Observation;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
        $computer = Computer::find($id);
        
        return response() 
            ->json(['data' => $computer->observations],
                200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $id, Request $request)
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
    public function show(string $id, string $observation)
    {
        //
        $computer = Computer::find($id);

        return response()
            ->json(['data' => $computer->observations->where('id', $observation)->first()],
                200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request, string $observation)
    {
        //
        $computer = Computer::find($id);
        $observation = $computer->observations->where('id', $observation)->first();
        $observation->update($request->all());

        return response()
            ->json(['data' => $observation],
                200);
    }

    /**
     * No tiene sentido borrar una observacion.
     */
    public function destroy(string $id, string $observation)
    {
        //
        $computer = Computer::find($id);
        $observation = $computer->observations->where('id', $observation)->first();
        $observation->delete();

        return response()
            ->json(null, 204);
    }
}
