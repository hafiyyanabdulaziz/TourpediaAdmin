<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite(Destination $destination)
    {
        return Auth::user()->favorites()->attach($destination->id);
        //return back();
    }

    public function unfavorite(Destination $destination)
    {
        return Auth::user()->favorites()->detach($destination->id);
        //return back();
    }

    public function myFavorites()
    {
        return Auth::user()->favorites;

        //return view('myFavorites', compact('myFavorites'));
    }
}
