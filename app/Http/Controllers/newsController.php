<?php

namespace App\Http\Controllers;
use App\Models\news;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
  
        return view('news.index', compact('news'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        news::create($request->all());
 
        return redirect()->route('news')->with('success', 'news added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = news::findOrFail($id);
  
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = news::findOrFail($id);
  
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = news::findOrFail($id);
  
        $news->update($request->all());
  
        return redirect()->route('news')->with('success', 'news updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news= news::findOrFail($id);
  
        $news->delete();
  
        return redirect()->route('news')->with('success', 'news deleted successfully');
    }
}
