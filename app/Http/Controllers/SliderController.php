<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    //

        public function index(){
        return view('backend.layout.slider.slider');
    }
    
    public function create(){
        return view('backend.layout.slider.sliderAdd');
    }
    public function edit(){
        return view('backend.layout.slider.sliderEdit');
    }
}
