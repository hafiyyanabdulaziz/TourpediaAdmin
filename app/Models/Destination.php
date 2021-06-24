<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Destination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'link_maps'
    ];

    public function images()
    {
        return $this->hasMany(DestinationImage::class, 'id_destinations', 'id');
    }

    public function favorited()
    {
        return (bool) FavoriteDestination::where('user_id', Auth::id())
            ->where('destination_id', $this->id)
            ->first();
    }
}
