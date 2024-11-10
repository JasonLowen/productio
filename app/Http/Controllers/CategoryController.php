<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index($id): View
    {
        $products = Product::where('categoryId', 'like', $id)->get();
        $category = Category::all();

        return view('index', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}
