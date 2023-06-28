@extends('layouts.app')

@section('title')
  Thriftophia | Tentang kami
@endsection

@section('about')
    active
@endsection

@push('after-style')
    <style>
        .team .member {
        position: relative;
        box-shadow: 0px 2px 13px rgba(0, 0, 0, 0.1);
        padding: 30px;
        border-radius: 5px;
        background: #fff;
        }

        .team .member {
        position: relative;
        padding: 30px;
        }

        .team .member .teampic {
        overflow: hidden;
        max-width: 90px !important;
        border-radius: 50%;
        }

        .team .member .member-info {
        padding-left: 30px;
        }

        .team .member h4 {
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 20px;
        color: #252525;
        }

        .team .member span {
        display: block;
        font-size: 15px;
        padding-bottom: 10px;
        position: relative;
        font-weight: 700;
        color: #636363
        }

        .team .member span::after {
        content: "";
        position: absolute;
        display: block;
        width: 50px;
        height: 2px;
        background: #e7ab3c;
        bottom: 0;
        left: 0;
        }

        .team .member p {
        padding: 0;
        margin-top: 0.5em;
        }

        .team .member .social {
        margin-top: 12px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        }

        .team .member .social a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        background: #e7ab3c;
        }

        .team .member .social a i {
        color: #252525;
        font-size: 16px;
        margin: 0 2px;
        }

        .team .member .social a:hover {
        background: #eff2f8;
        }

        .team .member .social a:hover i {
        color: #252525;
        }

        .team .member .social a+a {
        margin-left: 8px;
        }

        section {
        padding: 60px 0px;
        overflow: hidden;
        }

        .underline{
            width: 150px;
            height: 1px;
            background-color: #e7ab3c;
            margin: auto;
            margin-top: -30px;
        }

        .spad {
            padding-bottom: 0 !important;
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
                        <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Tentang Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- About Us Section Begin -->
    <div class="faq-section spad team section-bg" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img class="teampic" src="https://img.freepik.com/free-photo/rack-clothes-store_23-2148929537.jpg?w=740&t=st=1671347335~exp=1671347935~hmac=029af92ee619098813a324d42d2e2f41b5b1bd88a37419eef2c2469f5fa6540d" alt="thriftophia">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-title">
                        <h4>Salam thrifting!</h4>
                        <p class="card-body text-justify" style="padding:0;">
                            Halo dan selamat datang di <strong>Thriftophia</strong>, tempat untuk menemukan Produk Thrift terbaik untuk setiap selera dan kesempatan. Kami benar-benar memeriksa kualitas barang kami, bekerja hanya dengan pemasok terpercaya sehingga Anda hanya menerima produk dengan kualitas terbaik.
                        <br>Kami di <strong>Thriftophia</strong> percaya pada kualitas tinggi dan layanan pelanggan yang luar biasa. Namun yang terpenting, kami percaya berbelanja adalah hak, bukan kemewahan, jadi kami berusaha untuk memberikan produk terbaik dengan harga paling terjangkau, dan mengirimkannya kepada Anda di mana pun Anda berada.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mt-5">
                        <h2>Tim Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-3">
                    <div class="member d-flex align-items-start" >
                        <div class="teampic"><img src="/img/nisa.jpg" alt=""></div>
                            <div class="member-info">
                            <h4>Annisa Maulida Rahma</h4>
                            <span>Hacker</span>

                            <p class="card-body">
                                Balas dendam terbaik itu adalah menjadikan dirimu lebih baik.
                            </p>
                            <div class="social">
                                <a href="https://www.instagram.com/an.rhmaulida/"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/annisa-maulida-3549241a9/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://github.com/annisam23"><i class="fa fa-github"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="member d-flex align-items-start" >
                        <div class="teampic"><img src="/img/faqih.jpg" alt=""></div>
                            <div class="member-info">
                            <h4>Muhammad Faqih Azhar</h4>
                            <span>Hacker</span>
                            <p class="card-body">
                                Hidup adalah pilihan maka segala sesuatu yang terjadi adalah hasil daripada pilihan kita.
                            </p>
                            <div class="social">
                                <a href="https://www.instagram.com/faqihazh_/"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/faqih-azhar-50b704228/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://github.com/faqihazh"><i class="fa fa-github"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-3">
                    <div class="member d-flex align-items-start" >
                        <div class="teampic"><img src="/img/eva.jpg" alt=""></div>
                            <div class="member-info">
                            <h4>Siti Nur Kaffah</h4>
                            <span>Hustler</span>

                            <p class="card-body">Don't get caught up in other people's dreams, because we have our own.</p>
                            <div class="social">
                                <a href="https://instagram.com/evakffh_"><i class="fa fa-instagram"></i></a>
                                <a href="https://linkedin.com/in/sitinurkaffah"><i class="fa fa-linkedin"></i></a>
                                <a href="https://github.com/sitinurkaffah"> <i class="fa fa-github"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="member d-flex align-items-start" >
                        <div class="teampic"><img src="/img/farid.jpg" alt=""></div>
                            <div class="member-info">
                            <h4>Farid Syahroni</h4>
                            <span>Hustler</span>
                            <p class="card-body">Hidup bukan tentang menemukan diri kita sendiri. Hidup adalah tentang menciptakan diri kita.</p>
                            <div class="social">
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""> <i class="fa fa-github"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-3 mb-5">
                    <div class="member d-flex align-items-start" >
                        <div class="teampic"><img src="/img/fahri.jpg" alt=""></div>
                            <div class="member-info">
                            <h4>Fahri Prasetyo</h4>
                            <span>Designer</span>

                            <p class="card-body">The reason why people give up too fast is because they tend to look at how far they still have to go, instead of how far they have gotten.</p>
                            <div class="social">
                                <a href="https://www.linkedin.com/in/fahri-prastyo-4b6180229"><i class="fa fa-linkedin"></i></a>
                                <a href="https://github.com/fahriprastyo"><i class="fa fa-github"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- About Us Section End -->
@endsection

