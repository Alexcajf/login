<?php

namespace App\Http\Controllers\Api;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Requests\EquipoRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\EquipoResource;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $equipos = Equipo::paginate();

        return EquipoResource::collection($equipos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoRequest $request): Equipo
    {
        return Equipo::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo): Equipo
    {
        return $equipo;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoRequest $request, Equipo $equipo): Equipo
    {
        $equipo->update($request->validated());

        return $equipo;
    }

    public function destroy(Equipo $equipo): Response
    {
        $equipo->delete();

        return response()->noContent();
    }
}
