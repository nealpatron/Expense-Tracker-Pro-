<?php

namespace App\Http\Controllers;

use App\Models\Tran;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trans = auth()->user()->trans;
        return Inertia::render('List', ['trans' => $trans]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tran $tran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tran $tran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tran $tran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tran $tran)
    {
        //
    }
}
