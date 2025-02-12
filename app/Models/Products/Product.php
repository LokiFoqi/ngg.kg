<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sections\Section;
use App\Models\Products\Category;
use App\Models\Products\ProductImage;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\Products\ProductFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'section_id', 'category_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
