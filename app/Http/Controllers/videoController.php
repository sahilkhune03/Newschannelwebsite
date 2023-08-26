<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video = video::orderBy('created_at', 'DESC')->get();
  
        return view('videos.index', compact('video'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        video::create($request->all());
 
        return redirect()->route('videos')->with('success', 'video added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video = video::findOrFail($id);
  
        return view('videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = Video::findOrFail($id);
  
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $video = Video::findOrFail($id);
  
        $video->update($request->all());
  
        return redirect()->route('videos')->with('success', 'video updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video= Video::findOrFail($id);
  
        $video->delete();
  
        return redirect()->route('videos')->with('success', 'video deleted successfully');
    }
}
