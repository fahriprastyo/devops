<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductGallery;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = ProductGallery::with('product')->where('is_default', 1)->get();
        $recents = Blog::latest()->paginate(3);

        return view('pages.home')->with([
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
