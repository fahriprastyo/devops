@extends('layouts.app')

@section('title')
	Hello! Welcome to Thriftophia
@endsection

@section('home')
    active
@endsection

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
	<div class="hero-items owl-carousel">
		<div class="single-hero-items set-bg" data-setbg="/img/hero-1.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<span>CLOTHES</span>
						<h1>RABUBARU</h1>
						<p>
							Kami selalu melakukan pembaharuan produk setiap minggu. Produk dengan kualitas terbaik namun dengan harga yang sangat menarik
						</p>
						<a href="{{ route('shopping') }}" class="primary-btn">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="single-hero-items set-bg" data-setbg="/img/hero-2.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<span>KIDS MODEL</span>
						<h1>HAPPYCHILD</h1>
						<p>
                            Bukan hanya orang tua yang memiliki style. Berikan pakaian terbaik untuk anak anda sesuai stylenya masing-masing. Anak senang orang tua nyaman
						</p>
						<a href="{{ route('shopping') }}" class="primary-btn">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<div class="single-banner">
					<img src="/img/banner-1.jpg" alt="" />
					<div class="inner-text">
						<h4>Men’s</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-banner">
					<img src="/img/banner-2.jpg" alt="" />
					<div class="inner-text">
						<h4>Women’s</h4>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-banner">
					<img src="/img/banner-3.jpg" alt="" />
					<div class="inner-text">
						<h4>Kid’s</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Banner Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<div class="section-title">
									<h2>Produk Terbaru</h2>
							</div>
					</div>
			</div>
			<div class="row">
				<div class="product-slider owl-carousel">
					@forelse ($items as $item)
					<div class="product-item">
						<div class="pi-pic">
							<img src="{{ $item->photo }}" alt="" />
							<div class="icon">
								<i class="icon_heart_alt"></i>
							</div>
							<ul>
								<li class="w-icon active">
									<a href="{{ route('product', $item->product->slug) }}"><i class="icon_bag_alt"></i></a>
								</li>
								<li class="quick-view"><a href="{{ route('product', $item->product->slug) }}">+ Quick View</a></li>
							</ul>
						</div>
						<div class="pi-text">
							<div class="catagory-name">{{ $item->product->type }}</div>
							<a href="{{ route('product', $item->product->slug) }}">
								<h5 class="product-name">{{ $item->product->name }}</h5>
							</a>
							<div class="product-price">@currency($item->product->price)</div>
						</div>
					</div>
					@empty
					<p class="card-body text-center">Mohon maaf stok produk belum tersedia</p>
					@endforelse
				</div>
			</div>
	</div>
</div>
<!-- Related Products Section End -->

<!-- Instagram Section Begin -->
<div class="instagram-photo">
	<div class="insta-item set-bg" data-setbg="/img/insta-1.jpg">
		<div class="inside-text">
			<i class="ti-instagram"></i>
			<h5><a href="#">thriftophia_store</a></h5>
		</div>
	</div>
	<div class="insta-item set-bg" data-setbg="/img/insta-2.jpg">
		<div class="inside-text">
			<i class="ti-instagram"></i>
			<h5><a href="#">thriftophia_store</a></h5>
		</div>
	</div>
	<div class="insta-item set-bg" data-setbg="/img/insta-3.jpg">
		<div class="inside-text">
			<i class="ti-instagram"></i>
			<h5><a href="#">thriftophia_store</a></h5>
		</div>
	</div>
	<div class="insta-item set-bg" data-setbg="/img/insta-4.jpg">
		<div class="inside-text">
			<i class="ti-instagram"></i>
			<h5><a href="#">thriftophia_store</a></h5>
		</div>
	</div>
	<div class="insta-item set-bg" data-setbg="/img/insta-5.jpg">
		<div class="inside-text">
			<i class="ti-instagram"></i>
			<h5><a href="#">thriftophia_store</a></h5>
		</div>
	</div>
	<div class="insta-item set-bg" data-setbg="/img/insta-6.jpg">
		<div class="inside-text">
			<i class="ti-instagram"></i>
			<h5><a href="#">thriftophia_store</a></h5>
		</div>
	</div>
</div>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Gratis Ongkir</h6>
                            <p>Untuk order > 199K</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery On Time</h6>
                            <p>Jaaminan tiada masalah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Pembayaran Aman</h6>
                            <p>100% Uang aman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Blog Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($recents as $recent)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
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
            </div>
            @empty
            <p class="card-body text-center">Mohon maaf artikel belum tersedia</p>
            @endforelse
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <a href="{{url('/blog')}}" class="primary-btn mt-5 w-100 text-center">Lihat Artikel Lainnya</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->

@endsection
