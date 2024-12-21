<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Director;
use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DirectorCollection;
use App\Http\Resources\V1\DirectorResource;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::paginate();

        return new DirectorCollection($directors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDirectorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        return new DirectorResource($director);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirectorRequest $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        //
    }
}
