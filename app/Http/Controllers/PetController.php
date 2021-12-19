<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::latest()->paginate(10);;
        return Inertia::render('Pet/Index', [
            'pets' => $pets
        ]);
    }

    public function create()
    {
        return Inertia::render('Pet/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pet::create(
            Request::validate([
                'avatar' => ['required'],
                'name' => ['required', 'max:90']
            ])
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        // return new PetResource($pet);
    }

    public function edit(Pet $pet)
    {
        return Inertia::render('Pet/Edit', [
            'pet' => [
                'id' => $pet->id,
                'avatar' => $pet->avatar,
                'name' => $pet->name
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $data = Request::validate([
                'avatar' => ['required'],
                'name' => ['required', 'max:90'],
            ]);
        $pet->update($data);
        

        return Redirect::route('pets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return Redirect::route('pets.index');
    }
}
