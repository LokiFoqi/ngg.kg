<?php

namespace App\Http\Controllers;

use App\Models\Pages\Page;

class HomeController extends Controller
{
    //

    public function __construct()
    {

    }

    public function index()
    {
        $pages = Page::all();

        return view('pages.index', compact('pages'));
    }

    public function show_pages($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.show', compact('page'));
    }
}
