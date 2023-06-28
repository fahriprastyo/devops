@extends('layouts.app')

@section('title')
  Thriftophia | Pertanyaan tentang kami
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb-text">
                  <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                  <span>FAQs</span>
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
          <div class="col-lg-12">
              <div class="faq-accordin">
                  <div class="accordion" id="accordionExample">
                      <div class="card">
                          <div class="card-heading active">
                              <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                  Apa itu Thrift?
                              </a>
                          </div>
                          <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>thrift adalah berbagai produk seken atau bekas baik lokal maupun impor. Biasanya, barang-barang ini ditawarkan dengan harga yang sangat murah. </p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-heading">
                              <a data-toggle="collapse" data-target="#collapseTwo">
                                  Kenapa harus Thrifting?
                              </a>
                          </div>
                          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                  <p><strong>Mengurangi limbah</strong>
                                      Dengan membeli baju bekas hasil thrifting yang masih layak pakai,
                                      kamu tentunya sudah memberikan secuil kontribusi untuk mengurangi jumlah limbah di bumi.
                                      Lagipula, jika kamu sudah bosan dengan pakaian tersebut, nantinya dapat kamu jual kembali</p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-heading">
                              <a data-toggle="collapse" data-target="#collapseThree">
                                  Apa perbedaan Thrift dengan Preloved?
                              </a>
                          </div>
                          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>Preloved adalah penjualan barang milik pribadi yang masih layak dipakai,
                                      sedangkan thrift adalah menjual banyak barang bekas atau baju bertumpuk. </p>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-heading">
                              <a data-toggle="collapse" data-target="#collapseFour">
                                  Mengapa harus beli di THRIFTOPHIA?
                              </a>
                          </div>
                          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                  <p>Karena disini menyediakan produk thrift yang berkualitas serta dalam keadaan bersih dan wangi</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Faq Section End -->
@endsection
