<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Products\Product;

class ProductController extends Controller
{
    //
    public function __construct()
    {

    }


    public function index()
    {
        //

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        //
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'pdf' => 'required|mimes:pdf',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->pdf = $request->file('pdf')->store('products', 'public');

        $product->save();

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
        return view('admin.products.edit', compact('product'));
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
