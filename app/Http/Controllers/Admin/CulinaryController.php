<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Culinary;
use App\Models\Destination;
use Illuminate\Http\Request;

class CulinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Culinary::all();
        return view('admin.culinary.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.culinary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'integer'],
            'restaurant' => ['required', 'string'],
            'link_maps' => ['required', 'string']
        ]);
        $data = $request->all();
        Culinary::create($data);
        return redirect()->route('culinary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Culinary  $culinary
     * @return \Illuminate\Http\Response
     */
    public function show(Culinary $culinary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Culinary  $culinary
     * @return \Illuminate\Http\Response
     */
    public function edit(Culinary $culinary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Culinary  $culinary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Culinary $culinary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Culinary  $culinary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Culinary::findOrFail($id);
        $item->delete();
        return redirect()->route('culinary.index');
    }
}
