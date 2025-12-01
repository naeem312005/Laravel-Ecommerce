<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        return view('backend.layout.product.product', compact('products'));
    }

    public function create(){
         $categories=Category::all();
        return view('backend.layout.product.productAdd',compact('categories'));
    }

    public function store(Request $request){
        try {

            $validate = $request->validate([
                'category_id'       => 'required|integer',
                'name'              => 'required|string|max:255',
                'price'             => 'required|numeric',
                'featured'          => 'nullable|boolean',
                'stock'             => 'nullable|boolean',
                'quantity'          => 'required|integer',
                'short_description' => 'required|string',
                'description'       => 'required|string',
                'image'             => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            // Image Upload
            $fileName = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '_' . Str::random(20) . '.' . $file->getClientOriginalExtension();
                $path = 'uplods/product/';
                $file->move(public_path($path), $fileName);
            }

            // Insert Into Database
            Product::create([
                'category_id'       => $validate['category_id'],
                'name'              => $validate['name'],
                'price'             => $validate['price'],
                'featured'          => $request->featured ?? 0,
                'stock'             => $request->stock ?? 0,
                'quantity'          => $validate['quantity'],
                'short_description' => $validate['short_description'],
                'description'       => $validate['description'],
                'image'             => $fileName,
            ]);

            return redirect()->route('product')->with('success', 'Product Created Successfully!');

        } catch (\Throwable $th) {

            Log::error("Product Create Error: " . $th->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
