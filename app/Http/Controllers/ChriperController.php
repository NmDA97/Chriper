<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Chriper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ChriperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    
    {
        return view('chriper.index',[
            'chriper'=> Chriper::with('user')->latest()->get(),
        ]);

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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' =>'required|string|max:255',
        ]);

        $request->user()->chriper()->create($validated);

        return redirect(route('chriper.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chriper $chriper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chriper $chriper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chriper $chriper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chriper $chriper)
    {
        //
    }
}
