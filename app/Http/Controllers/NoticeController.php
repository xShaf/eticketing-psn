<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function showLatest(string $id = null)
    {
        $latestNotice = Notice::latest('updated_at')->first();

        return $latestNotice ? asset("storage/image_data/{$latestNotice->image_data}") : null;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notice $notice)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image_data' => ['nullable', 'image:jpeg,png,jpg,gif']
        ]);

        if ($request->hasFile('image_data')) {
            $filename = $request->file('image_data')->getClientOriginalName();
            $request->file('image_data')->storeAs('image_data', $filename, 'public');
            $notice->image_data = $filename;
        }

        $notice->fill($request->post())->save();

        return redirect()->route('notice.update')->with('status', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
