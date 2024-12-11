<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Cat::all();

        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'breed' => 'required',
            'sex' => 'required'
        ]);

        Cat::create($request->all());

        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        return view('cats.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'breed' => 'required',
            'sex' => 'required'
        ]);

        $cat->update($request->all());

        return redirect()->route('cats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        $cat->delete();

        return redirect()->route('cats.index');
    }
}
