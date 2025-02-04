<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatCollection;
use App\Http\Resources\CatResource;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::all();

        return new CatCollection($cats);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:64',
            'breed' => 'required|string|max:64',
            'description' => 'max:2048',
            'age' => 'required'
        ]);

        $cat = Cat::create($validated);

        return $cat;
    }

    public function show(Cat $cat)
    {
        return new CatResource($cat);
    }

    public function update(Request $request, Cat $cat)
    {
        //
    }

    public function destroy(Cat $cat)
    {
        //
    }
}
