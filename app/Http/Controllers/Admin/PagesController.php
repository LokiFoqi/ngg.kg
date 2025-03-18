<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products\Page;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $pages = Product::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        //
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string',
            'text' => 'nullable|string',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->text = $request->text;
        $page->image = $request->image->store('pages', 'public');

        $page->save();

        return redirect()->route('admin.products.index');
    }

    public function show(Page $page)
    {
        //
    }

    public function edit(Page $page)
    {
        //
        return view('admin.products.edit', compact('page'));
    }

    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name' => 'required',
            'pdf' => 'mimes:pdf',
        ]);

        $product->name = $request->name;

        if ($request->hasFile('pdf')) {
            $product->pdf = $request->file('pdf')->store('products', 'public');
        }

        $product->save();

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
