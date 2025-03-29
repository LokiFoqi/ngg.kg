<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pages\Page;
use Illuminate\Support\Facades\DB;

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
        $pages = Page::all();
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

        DB::beginTransaction();

        try {
            // Сохраняем запись в БД
            $page = new Page();
            $page->title = $request->title;
            $page->text = $request->text;
            $page->save();

            // Сохраняем изображение на сервер
            // в директорию с уникальным именем записи
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                // Уникальное имя файла
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                // Сохраняем файл
                $path = $image->storeAs('pages/' . $page->id, $imageName, 'public');

                // Обновляем запись в БД
                $page->image = $path;
                $page->save();
            }

            DB::commit();

            return redirect()->route('admin.pages.index')->with('success', 'Запись успешно создана');
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'Произошла ошибка при сохранении: ' . $e->getMessage()]);
        }
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

        return redirect()->route('admin.products.destroy');
    }
}
