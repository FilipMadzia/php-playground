<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Director;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DirectorCollection;
use App\Http\Resources\V1\DirectorResource;
use App\Filters\V1\DirectorsFilter;
use App\Http\Requests\V1\StoreDirectorRequest;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new DirectorsFilter();
        $filterItems = $filter->transform($request);

        $includeMovies = $request->query('includeMovies');

        $filteredDirectors = Director::where($filterItems);

        if($includeMovies)
        {
            $filteredDirectors = $filteredDirectors->with('movies');
        }

        return new DirectorCollection($filteredDirectors->paginate()->appends($request->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDirectorRequest $request)
    {
        return new DirectorResource(Director::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        $includeMovies = request()->query('includeMovies');

        if($includeMovies)
        {
            $director = $director->loadMissing('movies');
        }

        return new DirectorResource($director);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
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
