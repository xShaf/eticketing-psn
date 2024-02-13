<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarouselRequest;
use App\Http\Requests\UpdateCarouselRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::All();

        return view('admin.partials.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function add()
    {
        return view('admin.partials.carousel.add');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'carousel_data' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif']
        ]);

        $carousel = new Carousel();

        // Check if file is uploaded
        if ($request->hasFile('carousel_data')) {
            $filename = $request->file('carousel_data')->getClientOriginalName();
            $request->file('carousel_data')->storeAs('public/carousel_data', $filename);
            $carousel->carousel_data = $filename;
        }

        // Store other form data
        $carousel->name = $request->input('name');
        $carousel->save();

        return redirect()->route('carousel.index')->with('status', 'success');
    }


    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarouselRequest $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        return redirect()->route('carousel.index')->with('status', 'carousel-deleted');
    }
}
