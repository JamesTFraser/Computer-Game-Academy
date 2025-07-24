<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pages.index', ['pages' => Page::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'is_published' => 'boolean'
        ]);

        $page = new Page($validated);
        $page->user_id = auth()->id();
        $page->save();

        return redirect()->route('pages.index')->with('success', 'Page created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        $page = Page::published()->where('slug', $slug)->firstOrFail();
        return view('pages.show',['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page): View
    {
        return view('pages.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug,' . $page->id,
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'is_published' => 'boolean'
        ]);

        $page->update($validated);

        return redirect()->route('pages.index')->with('success', 'Page updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page): RedirectResponse
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted');
    }
}
