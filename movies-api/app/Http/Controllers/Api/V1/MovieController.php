<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\MoviesFilter;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\BulkStoreMovieRequest;
use App\Http\Resources\V1\MovieCollection;
use App\Http\Resources\V1\MovieResource;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new MoviesFilter();
        $filterItems = $filter->transform($request);

        $filteredMovies = Movie::where($filterItems);

        return new MovieCollection($filteredMovies->paginate()->appends($request->query()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function bulkStore(BulkStoreMovieRequest $request)
    {
        $bulk = collect($request->all())->map(function($arr, $key)
        {
            return Arr::except($arr, ['directorId']);
        });

        Movie::insert($bulk->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
