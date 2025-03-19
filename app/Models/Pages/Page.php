<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public mixed $title, $text, $image;
    protected $fillable = ['title', 'text', 'image'];

}
