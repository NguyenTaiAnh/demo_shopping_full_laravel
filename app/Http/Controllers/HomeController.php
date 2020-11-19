<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $b_product =Product::where('category_id',24)->get();
        $boproduct = Product::where('category_id',14)->get();
        $haproduct = Product::where('category_id',12)->get();
        $deproduct = Product::where('category_id',26)->get();
        $hoproduct = Product::where('category_id',27)->get();
        $oproduct = Product::where('category_id',28)->get();
        $dproduct = Product::where('category_id',29)->get();
        return view('Page.index',compact('b_product','boproduct','haproduct','deproduct','hoproduct','oproduct','dproduct'));
    }
    public function admin(){
        return view('home');
    }
}
