<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $items = Product::with(['galleries'])->where('slug', $id)->firstOrFail();
        $products = ProductGallery::all()->where('slug', $id);
        $anothers = ProductGallery::with('product')->where('is_default', 1)->get();

        return view('pages.product', [
            'items' => $items,
            'products' => $products,
            'anothers' => $anothers,
        ]);
    }

    public function add(Request $request, $id)
    {
        $data = [
            'users_id' => Auth::user()->id,
            'products_id' => $id
        ];

        Cart::create($data);

        return redirect()->route('cart');
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
