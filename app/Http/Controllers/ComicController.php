<?php

namespace App\Http\Controllers;

use App\models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();
        $siteLinks = config('data.siteLinks');

        return view('comics.index', compact('comics', 'siteLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siteLinks = config('data.siteLinks');
        return view('comics.create', compact('siteLinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'string|max:1500',
            'thumb' => 'url|max:200',
            'float' => 'numeric'
        ]);

        $data = $request->all();

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comic.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        $siteLinks = config('data.siteLinks');

        return view('comics.show', compact('comic', 'siteLinks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        $siteLinks = config('data.siteLinks');

        return view('comics.edit', compact('comic', 'siteLinks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();

        return redirect()->route('comic.index');
    }

    public function confirmDelete(Comic $comic)
    {
        return view('comics._confirmDelete', compact('comic'));
    }
}
