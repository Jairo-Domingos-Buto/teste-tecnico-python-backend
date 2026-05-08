<?php

namespace App\Http\Controllers;

use App\Models\Foco;
use Illuminate\Http\Request;
use App\Services\FocoService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\FocoRequest;

class FocoController extends Controller
{
    public function __construct(protected FocoService $service) {}
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $diagnosticos = $this->service->diagnostic();
        return response()->json($diagnosticos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(FocoRequest $request): JsonResponse
    {
        $foco = $this->service->create($request->validated());
        return response()->json(
            [
                "message" => "Foco criado com sucesso.",
                "data" => $foco,
            ],
            201,
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Foco $foco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foco $foco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foco $foco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foco $foco)
    {
        //
    }
}
