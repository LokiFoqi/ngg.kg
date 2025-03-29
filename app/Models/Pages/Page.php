<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'text', 'image'];

}
