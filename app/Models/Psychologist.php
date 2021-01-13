<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Psychologist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'gmap',
    ];

    public function getImagePathAttribute()
    {
        if (Storage::exists($this->image)) {
            return asset('storage/'.$this->image);
        }

        return asset('image/placeholder.png');
    }
}
