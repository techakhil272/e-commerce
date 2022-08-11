<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        //dd(Auth::user()->cart->sum('pivot.quantity'));
        $products = Product::all();
        $data = compact('products');
        return view('frontend.index')->with($data);
    }
    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $data = compact('product');
        return view('frontend.detail')->with($data);

    }
}
