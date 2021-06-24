<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\ResponseFormatter;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorite(Destination $destination)
    {
        $data = (bool) Auth::user()->destination_favorites()->find($destination->id);
        if (!$data) {
            Auth::user()->destination_favorites()->attach($destination->id);
        }
        return ResponseFormatter::success(null, 'success mengnambah data');
    }

    public function unfavorite(Destination $destination)
    {
        Auth::user()->destination_favorites()->detach($destination->id);
        return ResponseFormatter::success(null, 'success menghapus data');
    }

    public function myFavorites()
    {
        $item = Auth::user()->destination_favorites;

        return ResponseFormatter::success($item, 'success menampilkan data');
    }
}
