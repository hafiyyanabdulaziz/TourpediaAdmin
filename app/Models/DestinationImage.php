<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DestinationImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'destination_images';

    protected $fillable = [
        'id_destinations',
        'link_image'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'id_destinations', 'id');
    }
}
