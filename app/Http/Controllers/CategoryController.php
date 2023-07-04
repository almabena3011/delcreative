<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('language')->paginate(10);
        return view('LabCoding.Admin.Category.index', compact('category'));
    }

    public function add()
    {
        return view('LabCoding.Admin.Category.add');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'language' => 'required',
            'image' => 'required',
        ], [
            'language.required' => 'Tidak boleh kosong',
            'image.required' => 'Tidak boleh kosong',
        ]);
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->language = $request->input('language');
        $category->save();
        return redirect('categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('LabCoding.Admin.Category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'language' => 'required',
        ], [
            'language.required' => 'Tidak boleh kosong',

        ]);
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->language = $request->input('language');
        $category->update();
        return redirect('categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->image) {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories');
    }
}
