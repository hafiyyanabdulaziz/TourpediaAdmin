<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Exception;
use Illuminate\Http\Request;

class ApiDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Destination::with('images')->get();
        try {
            return ResponseFormatter::success([
                'item' => $item
            ], 'Success');
        } catch (\Throwable $th) {
            return ResponseFormatter::error(['error' => $th], 'Error', 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try {
        //     $request->validate([
        //         'title' => ['required', 'string'],
        //         'description' => ['required', 'string'],
        //         'link_maps' => ['required', 'string'],
        //     ]);

        //     Destination::create([
        //         'title' => $request->title,
        //         'description' => $request->description,
        //         'link_maps' => $request->link_maps,
        //     ]);

        //     return ResponseFormatter::success(['request' => $request], 'Success');
        // } catch (\Throwable $th) {
        //     return ResponseFormatter::error(['error' => $th], 'Error', 500);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $item = Destination::with('images')->findOrFail($id);
            //$item = Destination::findOrFail($id);


            return ResponseFormatter::success($item, 'Success');
        } catch (Exception $th) {
            return ResponseFormatter::error(['error' => $th], 'Error', 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
