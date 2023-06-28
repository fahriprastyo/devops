@extends('layouts.app')

@section('title')
  Thriftophia | Blog Details
@endsection

@section('blog')
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
          <a href="{{url('/blog')}}">Blog</a>
          <span>Blog Details</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>{{ $items->title }}</h2>
                        <p>{{ $items->category }} <span>- {{ $items->date }}</span></p>
                    </div>
                    <div class="blog-large-pic">
                        <img src="{{ $items->photo }}" alt="">
                    </div>
                    <div style="text-align: justify">
                        {!! $items->description !!}
                    </div>
                    <div class="tag-share ">
                    </div>

                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="blog-sidebar">
                    <div class="recent-post">
                        <h4 style="margin-top: 4.5em">Artikel Lainnya</h4>
                        <div class="recent-blog">
                            @foreach ($recents as $recent)
                            <a href="{{ route('blog-details', $recent->slug) }}" class="rb-item">
                                <div class="rb-pic">
                                    <img src="{{ $recent->photo }}" alt="">
                                </div>
                                <div class="rb-text">
                                    <h6>{{ $recent->title }}</h6>
                                    <p><span style="color: #e7ab3c">{{ $recent->date }}</span></p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Related Products Section End -->
                <div class="related-products spad" style="margin-top: 5rem !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2>Artikel Lainnya</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="product-slider owl-carousel">
                                @forelse ($recents as $recent)
                                <div class="single-latest-blog mr-3">
                                    <img src="{{ $recent->photo }}" alt="">
                                    <div class="latest-text">
                                        <div class="tag-list">
                                            <div class="tag-item">
                                                <i class="fa fa-folder-o"></i>
                                                {{ $recent->category }}
                                            </div>
                                            <div class="tag-item">
                                                <i class="fa fa-calendar-o"></i>
                                                {{ $recent->date }}
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details', $recent->slug) }}">
                                            <h4>{{ $recent->title }}</h4>
                                        </a>
                                        @php
                                            $p = substr($recent->description, 3, 100)
                                        @endphp
                                        <p>{{ $p }}...</p>
                                    </div>
                                </div>
                                @empty
                                <p class="card-body text-center">Mohon maaf artikel belum tersedia</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Related Products Section End -->
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
@endsection
