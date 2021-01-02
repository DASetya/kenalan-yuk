<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Syukur extends Model
{
    use HasFactory;

    protected $fillable = ['story', 'image'];

    public function getImagePathAttribute()
    {
        if (Storage::exists($this->image)) {
            return asset('storage/'.$this->image);
        }

        return asset('image/placeholder.png');
    }
}
