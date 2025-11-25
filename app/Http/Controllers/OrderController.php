<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
        public function index(){
        return view('backend.layout.order.order');
    }
    
    public function details(){
        return view('backend.layout.order.orderDetils');
    }
}
