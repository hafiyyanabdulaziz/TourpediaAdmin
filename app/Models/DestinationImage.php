<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_destinations',
        'link_image'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'id_destinations', 'id');
    }
}
