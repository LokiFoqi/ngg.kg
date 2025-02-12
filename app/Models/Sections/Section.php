<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts\Post;
use App\Models\Products\Product;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\Sections\SectionFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_section');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
