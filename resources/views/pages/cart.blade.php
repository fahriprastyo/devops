@extends('layouts.app')

@section('title')
  Thriftophia | Shopping Cart
@endsection

@section('shopping')
  active
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text product-more">
          <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
          <a href="{{url('shopping')}}">Shop</a>
          <span>Shopping Cart</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="cart-table">
          <table>
            <thead>
              <tr>
                <th>Gambar</th>
                <th class="p-name">Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th><i class="ti-close"></i></th>
              </tr>
            </thead>
            <tbody>
            @php $totalPrice = 0 @endphp
              @foreach ($carts as $cart)
              <tr>
                <td class="cart-pic first-row">
                  @if ($cart->product->galleries)
                    <img
                        src="{{ $cart->product->galleries->first()->photo }}"
                      alt=""
                      style="max-width: 60%;" />
                  @endif
                </td>
                <td class="cart-title first-row">
                  <h5>{{ $cart->product->name }}</h5>
                </td>
                <td class="p-price first-row">@currency($cart->product->price)</td>
                <td class="qua-col first-row">
                  <span class="pd-tags">
                    {{$cart->product->quantity}}
                  </span>
                </td>

                <td class="total-price first-row">@currency($cart->product->price)</td>
                <td class="close-td first-row">
                    <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button style="background: transparent; border:none" class="btn btn-remove-cart" type="submit">
                            <i class="ti-close"></i>
                        </button>
                    </form>
                </td>
              </tr>
              @php $totalPrice += $cart->product->price @endphp
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4 offset-lg-4">
            <div class="proceed-checkout">
              <ul>
                <li class="cart-total">Total <span>@currency($totalPrice)</span></li>
              </ul>
              <a href="{{url('checkout')}}" class="proceed-btn">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
