<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class HelloController extends Controller
{
    public function index()
    {
        $items = Blog::all();
        $recents = Blog::latest()->paginate(3);

        return view('pages.hello', [
            'items' => $items,
            'recents' => $recents,
        ]);
    }

}
