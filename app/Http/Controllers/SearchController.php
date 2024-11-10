<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(Request $request): View
    {
        $query = $request->input('query');
        $products = Product::where('productName', 'like', '%' . $query . '%')->get();
        $category = Category::all();
        return view('index', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}


