<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class BlogDetailsController extends Controller
{
    public function index(Request $request, $id)
    {
        $items = Blog::all()->where('slug', $id)->firstOrFail();
        $recents = Blog::latest()->paginate(5);

        return view('pages.blog-details', [
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
