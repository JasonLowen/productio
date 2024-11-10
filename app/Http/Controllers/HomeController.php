<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::limit(8)->get();
        $category = Category::all();
        
        return view('index', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}
