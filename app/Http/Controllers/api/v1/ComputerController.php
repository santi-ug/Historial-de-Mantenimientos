<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $computers = Computer::orderBy('name', 'asc')->get();

        return response() 
            ->json(['data' => $computers],
                200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request = Computer::create($request->all());

        return response()
            ->json(['data' => $request],
                201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        //
        return response()
            ->json(['data' => $computer],
                200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        //
        $computer->update($request->all());

        return response()
            ->json(['data' => $computer],
                200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        //
        $computer->delete();

        return response()
            ->json(null, 204);
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
