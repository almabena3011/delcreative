<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SoalController extends Controller
{
    public function index()
    {
        $soal = Soal::orderBy('category_id', 'desc')->paginate(10);
        return view('LabCoding.Admin.Soal.index', compact('soal'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('LabCoding.Admin.Soal.add', compact('categories'));
    }


    public function insert(Request $request)
    {
        $request->validate([
            'exercise' => 'required',
            'image' => 'required',
            'answer' => 'required',

        ], [
            'exercise.required' => 'Tidak boleh kosong',
            'image.required' => 'Tidak boleh kosong',
            'answer.required' => 'Tidak boleh kosong',
        ]);
        $soal = new Soal();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/soal', $filename);
            $soal->image = $filename;
        }

        $soal->category_id = $request->input('category_id');
        $soal->exercise = $request->input('exercise');
        $soal->answer = $request->input('answer');
        $soal->save();
        return redirect('soal')->with('status', "Soal Added Successfully");
    }

    public function edit($id)
    {
        $soal = Soal::find($id);
        $categories = Category::all();
        return view('LabCoding.Admin.Soal.edit', compact('soal', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'exercise' => 'required',
            'answer' => 'required',

        ], [
            'exercise.required' => 'Tidak boleh kosong',
            'answer.required' => 'Tidak boleh kosong',
        ]);

        $soal = Soal::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/soal/' . $soal->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/soal', $filename);
            $soal->image = $filename;
        }

        $soal->category_id = $request->input('category_id');
        $soal->exercise = $request->input('exercise');
        $soal->answer = $request->input('answer');
        $soal->update();
        return redirect('soal')->with('status', "soal Updated Succesfully");
    }

    public function destroy($id)
    {
        $soal = Soal::find($id);
        if ($soal->image) {
            $path = 'assets/uploads/soal/' . $soal->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $soal->delete();
        return redirect('soal')->with('status', "soal Deleted Succesfully");
    }
}
