<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $items = Blog::all();
        $recents = Blog::latest()->paginate(5);

        return view('pages.blog', [
            'items' => $items,
            'recents' => $recents,
        ]);
    }

    public function search(Request $request)
    {
        if ($request->has('search'))
        {
            $products = Product::where('name', 'LIKE', '%'.$request->search.'%');
        }
        else
        {
            $products = Product::all();
        }

        return view('pages.shopping', [
            'products' => $products,
        ]);
    }
}
