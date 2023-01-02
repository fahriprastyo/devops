@extends('layouts.app')

@section('title')
  Thriftophia | Temukan Pilihanmu
@endsection

@section('shopping')
    active
@endsection

@push('after-style')
<style>
    .product-item .pi-pic ul li {
        list-style: none;
        display: inline-block;
        background: #252525;
        color: #ffffff !important;
    }

    .product-item .pi-pic ul li a {
        color: #ffffff !important;
    }
</style>
@endpush

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text">
          <a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a>
          <span>Shop</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
  <div class="container">
    <div class="row  d-flex justify-content-center">
      {{-- <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
        <div class="filter-widget">
          <h4 class="fw-title">Kategori</h4>
          <ul class="filter-catagories">
            <li><a href="#">Pria</a></li>
            <li><a href="#">Wanita</a></li>
            <li><a href="#">Anak-anak</a></li>
          </ul>
        </div>

        <div class="filter-widget">
          <h4 class="fw-title">Size</h4>
          <div class="fw-size-choose">
            <div class="sc-item">
              <input type="radio" id="s-size" />
              <label for="s-size">s</label>
            </div>
            <div class="sc-item">
              <input type="radio" id="m-size" />
              <label for="m-size">m</label>
            </div>
            <div class="sc-item">
              <input type="radio" id="l-size" />
              <label for="l-size">l</label>
            </div>
            <div class="sc-item">
              <input type="radio" id="xl-size" />
              <label for="xl-size">xl</label>
            </div>
          </div>
        </div>
        <div class="filter-widget">
          <h4 class="fw-title">Warna</h4>
          <div class="fw-color-choose">
            <div class="cs-item">
              <input type="radio" id="cs-black" />
              <label class="cs-black" for="cs-black">Hitam</label>
            </div>
            <div class="cs-item">
              <input type="radio" id="cs-violet" />
              <label class="cs-violet" for="cs-violet">Ungu</label>
            </div>
            <div class="cs-item">
              <input type="radio" id="cs-blue" />
              <label class="cs-blue" for="cs-blue">Biru</label>
            </div>
            <div class="cs-item">
              <input type="radio" id="cs-yellow" />
              <label class="cs-yellow" for="cs-yellow">Kuning</label>
            </div>
            <div class="cs-item">
              <input type="radio" id="cs-red" />
              <label class="cs-red" for="cs-red">Merah</label>
            </div>
            <div class="cs-item">
              <input type="radio" id="cs-green" />
              <label class="cs-green" for="cs-green">Hijau</label>
            </div>
          </div>
        </div>
        <div class="filter-widget">
          <a href="#" class="filter-btn">Filter</a>
        </div>
      </div> --}}
      <div class="col-lg-11 order-1 order-lg-2">
        <div class="product-show-option">
          <div class="row">
            <div class="col-lg-7 col-md-6">
              <div class="select-option">
                <select class="sorting">
                  <option value="">Default Sorting</option>
                </select>
              </div>
            </div>
            <div class="col-lg-5 col-md-6 text-right">
              <p>Menampilkan Seluruh Produk</p>
            </div>
          </div>
        </div>
        <div class="product-list">
          <div class="row">
            @forelse ($items as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                  <div class="pi-pic">
                    <img src="{{ $item->photo }}" alt="" />
                    <ul>
                      <li class="quick-view w-100"><a href="{{ route('product', $item->product->slug) }}">+ Quick View</a></li>
                    </ul>
                  </div>
                  <div class="pi-text">
                    <div class="catagory-name">{{ $item->product->type }}</div>
                    <a href="{{ route('product', $item->product->slug) }}">
                      <h5>{{ $item->product->name }}</h5>
                    </a>
                    <div class="product-price">
                        @currency($item->product->price)
                    </div>
                  </div>
                </div>
              </div>
            @empty
            <div class="col-lg-12">
                <p class="card-body">Stok barang habis</p>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Product Shop Section End -->
@endsection
