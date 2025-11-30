<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.layout.category.category', compact('categories'));
    }
    public function create()
    {
        return view('backend.layout.category.categoryCreat');
    }


    //database data store
    public function store(Request $request)
    {



        try {

            //code...
            $validate = $request->validate([
                'name' => 'required | string|max:255',
                'status' => 'accepted',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'

            ]);


            $fileName = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                // $fileName= eun.'.'.$file->getClientOriginalNamefile


                $fileName = time() . '_' . Str::random(20) . '.' . $file->getClientOriginalExtension();
                $path = 'uplods/category/';
                $file->move(public_path($path), $fileName);
            };


            Category::create([
                'name' => $validate['name'],
                'slug' => Str::slug($validate['name']),
                'status' => $validate['status'],
                'image' => $fileName,
            ]);

            return redirect()->route('category')->with('success', 'Data Saved Successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("catagory Create error:" . $th->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function edit($id)
    {
        $categorie = Category::find($id);
        return view('backend.layout.category.categoryEdit', compact('categorie'));
    }



    public function update(Request $request, $id)
    {
        // dd($request->all());

        $validate = $request->validate([
            'name' => 'required | string|max:255',
            'status' => 'accepted',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'

        ]);



         $fileName = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                // $fileName= eun.'.'.$file->getClientOriginalNamefile


                $fileName = time() . '_' . Str::random(20) . '.' . $file->getClientOriginalExtension();
                $path = 'uplods/category/';
                $file->move(public_path($path), $fileName);
            };
        // dd('data store success',$validate);
        $categorie = Category::find($id);
        $categorie->update([
            'name' => $validate['name'],
            'slug' => Str::slug($validate['name']),
            'status' => $validate['status'],
            'image' => $fileName,

        ]);
        return redirect()->route('category')->with('success', 'Category Update Successfully!');
    }



    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category')->with('success', 'Category Delete Successfully!');
    }
}
