<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use App\Models\Observation;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('name', 'asc')->get();

        return response() 
            ->json(['data' => $users],
                200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = User::create($request->all());

        return response()
            ->json(['data' => $user],
                201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return response()
            ->json(['data' => $user],
                200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $user->update($request->all());

        return response()
            ->json(['data' => $user],
                200);
    }   

    /**
     * Remove the specified resource from storage.
     * No hay sentido borrar un usuario, solo desactivarlo
     */
    public function destroy(User $user)
    {
        //
        // $user->delete();

        // return response()
        //     ->json(null, 204);
    }

}
