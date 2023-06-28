@extends('layouts.app')

@section('title')
  Thriftophia | Details Product
@endsection

@section('shopping')
    active
@endsection

@push('addon-style')
    <link
    href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    rel="stylesheet"
    />
@endpush

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-text product-more">
          <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
          <a href="{{url('shopping')}}">Shop</a>
          <span>Detail</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details" >
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-5" id="gallery">
            <div class="product-pic-zoom">
              <img
                class="product-big-img"
                src="{{ $items->galleries->firstWhere('is_default', 1)->photo }}"
                alt=""
              />
              <div class="zoom-icon">
                <i class="fa fa-search-plus"></i>
              </div>
            </div>
            <div class="product-thumbs">
              <div class="product-thumbs-track ps-slider owl-carousel">
                @forelse ($products as $product)
                <div class="pt" data-imgbigurl="{{ url($product->photo) }}">
                    <img src="{{ url($product->photo) }}" alt="" />
                </div>
                @empty
                <div class="pt">
                    <p>Foto detail produk belum tersedia</p>
                </div>
                @endforelse
              </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="product-details">
              <div class="pd-title">
                <span>{{ $items->type }}</span>
                <h3>{{ $items->name }}</h3>
              </div>
              <div class="pd-rating">
                <span>Kondisi Barang : {{ $items->condition }}</span>
              </div>
              <div class="pd-desc text-justify">
                <p class="text-justify">
                    {!! $items->description !!}
                </p>
                <h4>@currency($items->price)</h4>
              </div>
              <ul class="pd-tags">
                <li><span>STOK : {{ $items->quantity }}</span></li>
              </ul>
              <div class="pd-size-choose">
                <div class="sc-item">
                  <input type="radio" id="lg-size" />
                  <label for="lg-size">{{ $items->size }}</label>
                </div>
              </div>
              <div class="quantity">
                @auth
                    <form action="{{ route('product-add', $items->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button style="border: none" class="primary-btn pd-cart">Add To Cart</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="primary-btn pd-cart">Sign In to Add</a>
                @endauth

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin: 5rem 0 2rem 0;">
      <div class="col-lg-12">
          <div class="section-title">
              <h2>Produk Lainnya</h2>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="product-slider owl-carousel">
        @forelse ($anothers as $another)
        <div class="product-item">
            <div class="pi-pic">
              <img src="{{ $another->photo }}" alt="" />
              <ul>
                <li class="w-icon active">
                  <a href="{{ route('product', $another->product->slug) }}"><i class="icon_bag_alt"></i></a>
                </li>
                <li class="quick-view"><a href="{{ route('product', $another->product->slug) }}">+ Quick View</a></li>
              </ul>
            </div>
            <div class="pi-text">
              <div class="catagory-name">{{ $another->product->type }}</div>
              <a href="{{ route('product', $another->product->slug) }}">
                <h5>{{ $another->product->name }}</h5>
              </a>
              <div class="product-price">
                @currency($another->product->price)
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
</section>
<!-- Product Shop Section End -->
@endsection

@push('addon-script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>>
    <script src="/js/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 1,
                photos: [
                    {
                        id: 1,
                        url: "/img/products/product-1.jpg",
                    },
                    {
                        id: 2,
                        url: "/img/products/product-2.jpg",
                    },
                    {
                        id: 3,
                        url: "/img/products/product-3.jpeg",
                    },
                    {
                        id: 4,
                        url: "/img/products/product-4.jpg",
                    },
                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
