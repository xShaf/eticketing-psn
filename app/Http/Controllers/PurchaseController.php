<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        return view('eticketing.form', compact('event'));
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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    public function chooseLocation()
    {

    }
}
