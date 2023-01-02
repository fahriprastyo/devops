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
          <a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a>
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
                                <div class="single-latest-blog mr-3">
                                    <img src="img/latest-1.jpg" alt="">
                                    <div class="latest-text">
                                        <div class="tag-list">
                                            <div class="tag-item">
                                                <i class="fa fa-calendar-o"></i>
                                                May 4,2019
                                            </div>
                                            <div class="tag-item">
                                                <i class="fa fa-comment-o"></i>
                                                5
                                            </div>
                                        </div>
                                        <a href="#">
                                            <h4>The Best Street Style From London Fashion Week</h4>
                                        </a>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                    </div>
                                </div>
                                <div class="single-latest-blog mr-3">
                                    <img src="img/latest-1.jpg" alt="">
                                    <div class="latest-text">
                                        <div class="tag-list">
                                            <div class="tag-item">
                                                <i class="fa fa-calendar-o"></i>
                                                May 4,2019
                                            </div>
                                            <div class="tag-item">
                                                <i class="fa fa-comment-o"></i>
                                                5
                                            </div>
                                        </div>
                                        <a href="#">
                                            <h4>The Best Street Style From London Fashion Week</h4>
                                        </a>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                    </div>
                                </div>
                                <div class="single-latest-blog mr-3">
                                    <img src="img/latest-1.jpg" alt="">
                                    <div class="latest-text">
                                        <div class="tag-list">
                                            <div class="tag-item">
                                                <i class="fa fa-calendar-o"></i>
                                                May 4,2019
                                            </div>
                                            <div class="tag-item">
                                                <i class="fa fa-comment-o"></i>
                                                5
                                            </div>
                                        </div>
                                        <a href="#">
                                            <h4>The Best Street Style From London Fashion Week</h4>
                                        </a>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                    </div>
                                </div>
                                <div class="single-latest-blog mr-3">
                                    <img src="img/latest-1.jpg" alt="">
                                    <div class="latest-text">
                                        <div class="tag-list">
                                            <div class="tag-item">
                                                <i class="fa fa-calendar-o"></i>
                                                May 4,2019
                                            </div>
                                            <div class="tag-item">
                                                <i class="fa fa-comment-o"></i>
                                                5
                                            </div>
                                        </div>
                                        <a href="#">
                                            <h4>The Best Street Style From London Fashion Week</h4>
                                        </a>
                                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                    </div>
                                </div>
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
