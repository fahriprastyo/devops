@extends('layouts.hello')

@section('title')
  Thriftophia | Blog
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
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">
              @forelse ($items as $item)
              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="{{ $item->photo }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="{{ route('hello-details', $item->slug) }}">{{ $item->title }}</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="{{ route('hello-details', $item->slug) }}">{{ $item->category }} </a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('hello-details', $item->slug) }}"><time datetime="2022-01-01">{{ $item->date }}</time></a></li>

                    </ul>
                  </div>

                  @php
                    $p = substr($item->description, 3, 85)
                  @endphp

                  <div class="content">
                    <p style="text-align: justify;color:rgba(var(--color-secondary-dark-rgb), 0.7);">
                      {{ $p }}...
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{ route('hello-details', $item->slug) }}">Baca Selengkapnya</a>
                  </div>

                </article>
              </div>
              @empty
              <div class="col-lg-12">
                  <p class="card-body text-center">Mohon maaf artikel belum tersedia</p>
              </div>
              @endforelse

            </div><!-- End blog posts list -->

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
                      <h4><a href="blog-post.html">{{ $recent->title }}</a></h4>
                      <time datetime="2023-13-01">{{ $recent->date }}</time>
                    </div>
                  </div>
                  @endforeach

                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

</main>
@endsection
