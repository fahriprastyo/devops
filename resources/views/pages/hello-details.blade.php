@extends('layouts.hello')

@section('title')
  Thriftophia | Blog Details
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('hello-blog')}}">Blog</a></li>
            <li>Blog Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{ $items->photo }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $items->title }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="blog-details.html">{{ $items->category }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{ $items->date }}</time></a></li>

                </ul>
              </div><!-- End meta top -->

              <div class="content" style="text-align: justify">
                {!! $items->description !!}
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

              </div><!-- End meta bottom -->

            </article><!-- End blog post -->
          </div>

          <div class="col-lg-4">

            <div class="sidebar">

                <div class="sidebar-item recent-posts">
                    <h3 class="sidebar-title">Postingan Terbaru</h3>

                    <div class="mt-3 mb-3">

                      @foreach ($recents as $recent)
                      <div class="post-item">
                        <img src="{{ $recent->photo }}" alt="" class="flex-shrink-0">
                        <div>
                          <h4><a href="{{ route('hello-details', $recent->slug) }}">{{ $recent->title }}</a></h4>
                          <time datetime="2023-13-01">{{ $recent->date }}</time>
                        </div>
                      </div>
                      @endforeach

                    </div>

                  </div>


            </div><!-- End Blog Sidebar -->


          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

</main>
@endsection
