@extends('layouts.app')

@section('title')
  Thriftophia | Pertanyaan tentang kami
@endsection

@section('contact')
    active
@endsection

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb-text">
                  <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                  <span>Contact</span>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Map Section Begin -->
<div class="map spad">
  <div class="container">
      <div class="map-inner">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1484836902223!2d106.81955631583793!3d-6.628472582120381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8a9f5f33c29%3A0x7f90416f4f857406!2sJl.%20Raya%20Tajur%20No.81%2C%20RT.2%2FRW.3%2C%20Tajur%2C%20Kec.%20Bogor%20Tim.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016141!5e0!3m2!1sen!2sid!4v1671716229389!5m2!1sen!2sid"
          height="610" style="border:0;" allowfullscreen="">
          </iframe>
          <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126887.73021590237!2d106.7744148582031!3d-6.36277389999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6178a2b32f%3A0x20d7938791acfd4a!2sSTT%20Terpadu%20Nurul%20Fikri%20(Kampus%20A%20-%20Sekretariat)!5e0!3m2!1sen!2sid!4v1670983256050!5m2!1sen!2sid"
              height="610" style="border:0" allowfullscreen="">
          </iframe> -->
          <div class="icon">
              <i class="fa fa-map-marker"></i>
          </div>
      </div>
  </div>
</div>
<!-- Map Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-5">
              <div class="contact-title">
                  <h4>Kontak</h4>
                  <p>Untuk Informasi detail<p>
              </div>
              <div class="contact-widget">
                  <div class="cw-item">
                      <div class="ci-icon">
                          <i class="ti-location-pin"></i>
                      </div>
                      <div class="ci-text">
                          <span>Alamat :</span>
                          <p>Jl. Raya Tajur No.81, RT.002/003 Kec. Bogor Timur Kota Bogor 16141</p>
                      </div>
                  </div>
                  <div class="cw-item">
                      <div class="ci-icon">
                          <i class="ti-mobile"></i>
                      </div>
                      <div class="ci-text">
                          <span>Telepon:</span>
                          <p>(+62) 851 5657 6824</p>
                      </div>
                  </div>
                  <div class="cw-item">
                      <div class="ci-icon">
                          <i class="ti-email"></i>
                      </div>
                      <div class="ci-text">
                          <span>Email:</span>
                          <p>thriftopia@gmail.com</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
              <div class="contact-form">
                  <div class="leave-comment">
                      <h4>Tinggalkan Komentar/Saran</h4>
                      <p>Staf kami akan kembali dan menjawab pertanyaan Anda.</p>
                      <form class="comment-form" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="row">
                              <div class="col-lg-6">
                                <input
                                    type="text"
                                    placeholder="Nama"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"/>
                                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                              </div>
                              <div class="col-lg-6">
                                <input
                                    type="text"
                                    placeholder="Alamat Email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"/>
                                    @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                              </div>
                              <div class="col-lg-12">
                                <textarea
                                    placeholder="Komentar"
                                    name="comment"
                                    class="form-control
                                    @error('comment') is-invalid @enderror">{{ old('comment')}}
                                </textarea>
                                <button type="submit" class="site-btn">Kirim Pesan</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Contact Section End -->
@endsection
