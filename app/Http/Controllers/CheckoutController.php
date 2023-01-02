<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $price = Cart::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();

        return view('pages.checkout')->with([
            'price' => $price
        ]);
    }

    public function process(Request $request)
    {
        // TODO: Save users data
        $user = Auth::user();
        // $user->update($request->except('total_price'));

        // Proses checkout
        $code = 'THRTF' . mt_rand(000000,999999);
        $carts = Cart::with(['product','user'])
                    ->where('users_id', Auth::user()->id)
                    ->get();


        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'inscurance_price' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'code' => $code,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'phone' => $request->phone,
            'name' => $request->name,
        ]);

        foreach ($carts as $cart) {
            $trx = 'TRXTF' . mt_rand(000000,999999);

            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => '',
                'code' => $trx
            ]);
        }

        Cart::with(['product','user'])
                ->where('users_id', Auth::user()->id)
                ->delete();

        return redirect()->route('success');
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
