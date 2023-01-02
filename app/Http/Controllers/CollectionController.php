<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductGallery;
use App\Models\Product;

class CollectionController extends Controller
{
    public function index()
    {
        $items = ProductGallery::with('product')->where('is_default', 1)->get();

        return view('pages.collection')->with([
            'items' => $items
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
