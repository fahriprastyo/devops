@extends('layouts.hello')

@section('title')
  Thriftophia | Hello
@endsection

@section('content')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="/assets/img/carousel/1.png" class="img-fluid animated">
      <h2>Selamat datang di <span>Thriftophia</span></h2>
      <p>Thrifting Mudah, Aman dan Nyaman</p>
      <div class="d-flex">
        <a href="{{url('/home')}}" class="btn-get-started scrollto">Mulai</a>
      </div>
    </div>
</section>

<main id="main">

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
    <div class="container">

    <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
        <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-shop-window"></i></div>
            <h4><a href="" class="stretched-link">Produk Berkualitas</a></h4>
            <p>Produk thrift yang berkualitas dalam keadaan bersih & wangi</p>
        </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
        <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-tag"></i></div>
            <h4><a href="" class="stretched-link">Harga Terjangkau</a></h4>
            <p>Harga produk di Thriftophia sangat pas di kantong kaum muda</p>
        </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
        <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-truck"></i></div>
            <h4><a href="" class="stretched-link">Pengiriman Cepat</a></h4>
            <p>Untuk Pengiriman di wilayah JABODETABEK sehari sampai tujuan</p>
        </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
        <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4><a href="" class="stretched-link">Model Unik</a></h4>
            <p>Model tidak pasaran,sehinggga membuat anda lebih percaya diri!</p>
        </div>
        </div><!-- End Service Item -->

    </div>

    </div>
</section><!-- End Featured Services Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

    <div class="about-title d-flex flex-column justify-content-center align-items-center">
        <h2>Tentang Kami</h2>
        <p class="text-center">Thriftophia adalah tempat untuk menemukan Produk Thrift terbaik untuk setiap selera dan kesempatan. Kami benar-benar memeriksa kualitas barang kami, bekerja hanya dengan pemasok terpercaya sehingga Anda hanya menerima produk dengan kualitas terbaik. Kami di Thriftophia percaya pada kualitas tinggi dan layanan pelanggan yang luar biasa. Namun yang terpenting, kami percaya berbelanja adalah hak, bukan kemewahan, jadi kami berusaha untuk memberikan produk terbaik dengan harga paling terjangkau, dan mengirimkannya kepada Anda di mana pun Anda berada. </p>
    </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Call To Action Section ======= -->
<section id="cta" class="cta">
    <div  data-aos="zoom-out">

        <div class="row g-5">

            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Tertarik dengan <em>Thriftophia?</em> kunjungi website kami</h3>
            <p>Fashionable dengan Budget minim</p>
            <a class="cta-btn align-self-start" href="{{url('/home')}}">Klik Disini</a>
            </div>

            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
                <img src="/assets/img/cta1.png" alt="" class="img-fluid">
            </div>
            </div>

        </div>

    </div>
</section><!-- End Call To Action Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

    <div class="services-title text-center">
        <h2>Produk Terbaik Kami</h2>
    </div>

    <div class="row gy-5 d-flex justify-content-around align-items-center">

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
            <div class="img">
            <img src="/assets/img/baju1.png" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-zoom-in"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Sweater Putih</h3>
            </a>
            </div>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
            <div class="img">
            <img src="/assets/img/celana1.png" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-zoom-in"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Celana Jeans</h3>
            </a>
            </div>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
            <div class="img">
            <img src="/assets/img/baju2.png" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-zoom-in"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Kaos Stripped Biru</h3>
            </a>
            </div>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-item">
            <div class="img">
            <img src="/assets/img/baju3.png" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-zoom-in"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Kemeja Garis Vertikal</h3>
            </a>
            <a href="#" class="stretched-link"></a>
            </div>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
        <div class="service-item">
            <div class="img">
            <img src="/assets/img/celana2.png" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-zoom-in"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Celana Parasut</h3>
            </a>
            <a href="#" class="stretched-link"></a>
            </div>
        </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
        <div class="service-item">
            <div class="img">
            <img src="/assets/img/baju4.png" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
            <div class="icon">
                <i class="bi bi-zoom-in"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Kemeja Motif Wanita</h3>
            </a>
            <a href="#" class="stretched-link"></a>
            </div>
        </div>
        </div><!-- End Service Item -->

    </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
    <div class="container-fluid" data-aos="fade-up">

    <div class="row gy-4">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content px-xl-5">
            <h3>Frequently Asked <strong>Questions</strong></h3>
            <p>
            Pertanyaan Mengenai Thrifting maupun Thriftophia
            </p>
        </div>

        <div class="accordion accordion-flush px-xl-5" id="faqlist">

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                <i class="bi bi-question-circle question-icon"></i>
                Apa itu Thrift?
                </button>
            </h3>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                barang bekas atau secondhand yang masih dalam kondisi layak untuk dipakai; bisa berupa pakaian, elektronik, atau benda-benda antik lainnya.
                </div>
            </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                <i class="bi bi-question-circle question-icon"></i>
                Apa perbedaan antara Thrift dan Preloved?
                </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Perbedaan thrift dan preloved yang paling mendasar adalah asalnya. Thrift merupakan pakaian bekas yang dibeli dari luar negeri dalam karung sehingga tidak jarang ada barang bermerek ataupun yang bernuansa vintage di sana, dan dijual grosir maupun satuan. Sedangkan barang preloved adalah baju bekas penggunaan pribadi yang dijual secara satuan. 
                </div>
            </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                <i class="bi bi-question-circle question-icon"></i>
                Apa Manfaat Thrifting?
                </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Mendapat barang bermerek,Menghemat biaya,Gerakan Ramah Lingkungan,Bereksperimen dengan gaya
                </div>
            </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                <i class="bi bi-question-circle question-icon"></i>
                Mengapa Harus di Thriftophia?
                </button>
            </h3>
            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                <i class="bi bi-question-circle question-icon"></i>
                Di <strong>Thriftophia</strong> menyediakan banyak produk berkualitas dalam keadaan bersih dan wangi disertai dengan harga murah dan model unik.
                </div>
            </div>
            </div><!-- # Faq item-->

            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                <i class="bi bi-question-circle question-icon"></i>
                Bagaimana cara membeli produk di Thriftophia?
                </button>
            </h3>
            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                Kunjungi Landing pagenya lalu klik Mulai untuk melihat isi Landingpage nya,kemudian jika tertarik membeli bisa <a href="#cta">Klik disini</a>
                </div>
            </div>
            </div><!-- # Faq item-->

        </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq2.png");'>&nbsp;</div>
    </div>

    </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <div class="blog-title text-center">
        <h2>Blog</h2>
        </div>

        <div class="row">

        @forelse ($recents as $recent)
        <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
                <div class="post-img"><img src="{{ $recent->photo }}" class="img-fluid" alt=""></div>
                <div class="meta">
                    <span class="post-date">{{ $recent->date }}</span>
                    <span class="post-author"> / {{ $recent->category }}</span>
                </div>
                <h3 class="post-title">{{ $recent->title }}</h3>
                @php
                    $p = substr($recent->description, 5, 100)
                @endphp
                <p>{{ $p }}...</p>
                <a href="{{ route('hello-details', $recent->slug) }}" class="readmore stretched-link mb-5 "><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        @empty
            <div class="col-lg-12">
                <p>Mohon maaf artikel belum tersedia</p>
            </div>
        @endforelse

        </div>

    </div>

</section><!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mb-3">

    <div class="contact-title text-center ">
        <h2 class="mb-5">Lokasi Kami</h2>
    </div>



    <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-12 d-flex">

            <div class="info col-lg-6">
              <h3>Get in touch</h3>
              <p>Untuk Info Detail</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jl. Raya Tajur No.81, RT.2/RW.7, Tajur, Kota Bogor, Jawa Barat</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>thriftophia@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telepon:</h4>
                  <p> (021) 7863191</p>
                </div>
              </div><!-- End Info Item -->

            </div>
            <div class="col-lg-6 map bordered">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1484836902223!2d106.81955631583793!3d-6.628472582120381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8a9f5f33c29%3A0x7f90416f4f857406!2sJl.%20Raya%20Tajur%20No.81%2C%20RT.2%2FRW.3%2C%20Tajur%2C%20Kec.%20Bogor%20Tim.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016141!5e0!3m2!1sen!2sid!4v1671716229389!5m2!1sen!2sid"  frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

        </div>

      </div>
</section><!-- End Contact Section -->

</main>
@endsection
