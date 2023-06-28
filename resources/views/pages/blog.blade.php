@extends('layouts.app')

@section('title')
  Thriftophia | Blog
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
          <span>Blog</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($items as $item)
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="{{ $item->photo }}" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="{{ route('blog-details', $item->slug) }}">
                                    <h4>{{ $item->title }}</h4>
                                </a>
                                <p>{{ $item->category }} <span>- {{ $item->date }}</span></p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-lg-12">
                        <p class="card-body text-center">Mohon maaf artikel belum tersedia</p>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="blog-sidebar">
                    <div class="recent-post">
                        <h4>Postingan Terbaru</h4>
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
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
