<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syukur extends Model
{
    use HasFactory;

    protected $fillable = ['story', 'image'];
}
