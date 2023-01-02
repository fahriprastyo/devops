@extends('layouts.app')

@section('title')
  Thriftophia | Check Out
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
          <a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a>
          <a href="{{url('shopping')}}">Shop</a>
          <span>Check Out</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
  <div class="container">
    <form class="checkout-form" action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-lg-6">
          <h4>Rincian Pembayaran</h4>
          <div class="row">
                <div class="col-lg-12">
                    @php $totalPrice = 0 @endphp
                    @foreach ($price as $p)
                        <p class="d-none">@currency($p->product->price)</p>
                    @php $totalPrice += $p->product->price @endphp
                    @endforeach
                    <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                </div>
                <div class="col-lg-12">
                    <label for="name">Nama Lengkap<span>*</span></label>
                    <input
                        id="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        value="{{ old('name') }}"
                        required autocomplete="name" autofocus />

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-12">
                    <label for="address">Alamat Lengkap<span>*</span></label>
                    <input
                        id="address"
                        type="text"
                        class="form-control @error('address') is-invalid @enderror"
                        name="address"
                        value="{{ old('address') }}"
                        required autocomplete="address" autofocus />

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-12">
                    <label for="zip_code">Kode POS<span>*</span></label>
                    <input
                        id="zip_code"
                        type="text"
                        class="form-control @error('zip_code') is-invalid @enderror"
                        name="zip_code"
                        value="{{ old('zip_code') }}"
                        required autocomplete="zip_code" autofocus />

                        @error('zip_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="email">Alamat Email<span>*</span></label>
                    <input
                        id="email"
                        type="text"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required autocomplete="email" autofocus />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="phone">Nomor Handphone<span>*</span></label>
                    <input
                        id="phone"
                        type="text"
                        class="form-control @error('phone') is-invalid @enderror"
                        name="phone"
                        value="{{ old('phone') }}"
                        required autocomplete="phone" autofocus />

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="place-order">
            <h4>Detail Pesanan</h4>
            <div class="proceed-checkout">
              <ul>
                  <li class="subtotal mt-3">Subtotal <span>@currency( $totalPrice )</span></li>
                  @php
                    $discount = 10/100 * $totalPrice
                  @endphp
                  <li class="subtotal mt-3">Discount (10%) <span>@currency( $discount )</span></li>
                  @php
                    $totalFinal = $totalPrice - $discount
                  @endphp
                  <li class="subtotal mt-3" style="color: #e7ab3c;font-weight:800">Total Biaya <span style="color: #e7ab3c;font-weight:800">@currency( $totalFinal )</span></li>
                  <li class="subtotal mt-3">Bank Transfer <span>Bank Rakyat Indonesia (BRI)</span></li>
                  <li class="subtotal mt-3">No. Rekening <span>0805 01 057475 53 1</span></li>
                  <li class="subtotal mt-3">E-Wallet <span>DANA</span></li>
                  <li class="subtotal mt-3">No. E-Wallet <span>0812 9196 8989</span></li>
                  <li class="subtotal mt-3">Nama Penerima <span>Muhamad Faqih Azhar</span></li>
              </ul>
              <button type="submit" style="border: none" class="proceed-btn w-100">Pesan Sekarang</button>
          </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
