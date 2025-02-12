<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sections\Section;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\Posts\PostFactory> */
    use HasFactory;

    protected $fillable = ['title', 'content', 'image'];

    public function section()
    {
        return $this->belongsToMany(Section::class, 'post_section');
    }
}
