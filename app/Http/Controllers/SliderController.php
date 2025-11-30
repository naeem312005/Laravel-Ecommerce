<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    //

        public function index(){
            $Sliders = Slider::latest()->get();
        return view('backend.layout.slider.slider',compact('Sliders'));
    }
    
    public function create(){
        return view('backend.layout.slider.sliderAdd');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'tagline'=>'required|string|max:20',
            'title'=>'required|string|max:20',
            'subtitle'=>'required|string|max:20',
            'image'=>'required|mimes:png,jpg,jpeg|image',
        ]);

        $fileName= null;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $fileName= time().'_'.Str::random(20).'.'.$file->getClientOriginalExtension();
            $path = 'uplods/slider/';
            $file->move(public_path($path),$fileName);

        }
        Slider::create([
            'tagline' => $validate['tagline'],
            'title' => $validate['title'],
            'subtitle' => $validate['subtitle'],
            'image' => $fileName,
        ]);
        return redirect()->route('slider')->with('success', 'Data Saved Successfully!'); 

    }


    public function edit($id){
        $Slider=Slider::find($id);
        return view('backend.layout.slider.sliderEdit',compact('Slider'));
    }

    public function update(Request $request,$id){
                $validate = $request->validate([
            'tagline'=>'required|string|max:20',
            'title'=>'required|string|max:20',
            'subtitle'=>'required|string|max:20',
            'image'=>'required|mimes:png,jpg,jpeg|image',
        ]);

        $fileName= null;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $fileName= time().'_'.Str::random(20).'.'.$file->getClientOriginalExtension();
            $path = 'uplods/slider/';
            $file->move(public_path($path),$fileName);

        }
        $Slider= Slider::find($id);

        $Slider->update([
                'tagline' => $validate['tagline'],
            'title' => $validate['title'],
            'subtitle' => $validate['subtitle'],
            'image' => $fileName,
        ]);
        
        return redirect()->route('slider')->with('success', 'Data Update Successfully!'); 
    }
    public function destroy(Request $request,$id){
        Slider::find($id)->delete();
         return redirect()->route('slider')->with('success', 'Data Delete Successfully!'); 
    }
}
