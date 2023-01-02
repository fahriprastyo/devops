@extends('layouts.app')

@section('title')
  Thriftophia | Collection
@endsection

@section('collection')
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
          <span>Collection</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Faq Section Begin -->
<div class="faq-section spad">
    <div class="container">
        <div class="row">
            @forelse ($items as $item)
                <div class="col-lg-4 col-md-4">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ $item->photo }}" alt="" />
                            <ul>
                                <li class="quick-view p-3 w-100" style="background: #252525; color:#ffffff; font-weight:600">{{ $item->product->name }}</li>
                            </ul>
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
  <!-- Faq Section End -->
@endsection
