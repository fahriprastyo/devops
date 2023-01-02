<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Product;

class FaqController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.faq');
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
