<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $data = compact('products');
        return view('home.index')->with($data);
    }
    public function detail($slug)
    {
        $detail = Product::where('slug', $slug)->first();
        dd($detail);
    }
}
