<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'my_story_category_id',
        'story',
    ];

    public function myStoryCategory()
    {
        return $this->belongsTo(MyStoryCategory::class);
    }
}
