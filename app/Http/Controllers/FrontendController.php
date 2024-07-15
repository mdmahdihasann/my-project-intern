<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['frontend']=Product::with('categories')->where('status','1')->get();
        return view('frontend.home',$data);
    }
}
