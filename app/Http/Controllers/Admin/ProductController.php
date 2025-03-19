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
        $this->middleware('auth');
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
        $request->validate([
            'name' => 'required',
            'pdf' => 'required|mimes:pdf',
        ]);

        // 1. Сохраняем продукт без файла, чтобы получить ID
        $product = new Product();
        $product->name = $request->name;
        $product->save();

        // 2. Сохраняем PDF в папку products/{id}
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfName = uniqid() . '.' . $pdf->getClientOriginalExtension();
            $pdfPath = $pdf->storeAs('products/' . $product->id, $pdfName, 'public');

            // 3. Обновляем путь и сохраняем запись
            $product->pdf = $pdfPath;
            $product->save();
        }

        return redirect()->route('admin.products.index')->with('success', 'Продукт успешно добавлен');
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
