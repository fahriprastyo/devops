        <!-- Header Section Begin -->
        @guest
        <header class="header-section">
            <div class="header-top">
                <div class="container">
                    <div class="ht-left">
                        <div class="mail-service">
                            <i class="fa fa-envelope"></i>
                            thriftophia@gmail.com
                        </div>
                        <div class="phone-service">
                            <i class="fa fa-phone"></i>
                            (+62) 851 5657 6824
                        </div>
                    </div>
                    <div class="ht-right">
                        <a href="{{route('login')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                        <div class="lan-selector">
                            <select
                                class="language_drop"
                                name="countries"
                                id="countries"
                                style="width: 300px"
                            >
                                <option
                                    value="yu"
                                    data-image="/img/flag-2.jpg"
                                    data-imagecss="flag yu"
                                    data-title="Indonesia"
                                >
                                    Indonesia
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="inner-header">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="/img/logo1.png" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4"></div>
                        <div class="col-lg-6 col-md-6">
                            <div class="advanced-search">
                                {{-- <button type="button" class="category-btn">
                                    Semua Kategori
                                </button> --}}
                                <div class="input-group">
                                    <form action="shopping" class="form-inline" method="GET">
                                        <input  type="text" placeholder="Nama produk?" />
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <div class="container">
                    <nav class="nav-menu mobile-menu d-flex justify-content-around">
                        <ul>
                            <li class="@yield('home')"><a href="{{url('/')}}">Home</a></li>
                            <li class="@yield('shopping')"><a href="{{url('shopping')}}">Shop</a></li>
                            <li class="@yield('collection')"><a href="{{url('collection')}}">Collection</a></li>
                            <li class="@yield('blog')"><a href="{{url('blog')}}">Blog</a></li>
                            <li class="@yield('contact')"><a href="{{url('contact')}}">Contact</a></li>
                            <li class="@yield('about')"><a href="{{url('about')}}">About Us</a></li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('faq')}}">Faq</a></li>
                                    <li>
                                        <a href="{{route('register')}}">Register</a>
                                    </li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </header>
        @endguest

        @auth
        <header class="header-section">
            <div class="header-top">
              <div class="container">
                <div class="ht-left">
                  <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    thriftophia@gmail.com
                  </div>
                  <div class="phone-service">
                    <i class="fa fa-upload"></i>
                    <a class="upload" href="https://wa.me/6285156576824">Upload Bukti Pembayaran</a>
                  </div>
                  <div class="mail-service ml-3">
                    <i class="fa fa-phone"></i>
                    (+62) 851 5657 6824
                  </div>
                </div>
                <div class="ht-right">
                  <a href="{{route('logout')}}" class="login-panel"><i class="fa fa-power-off"></i>Logout</a>
                  <span class="login-panel pr-4"><i class="fa fa-user"></i>Hai, {{ Auth::user()->name }}</span>
                  <div class="lan-selector">
                    <select
                      class="language_drop"
                      name="countries"
                      id="countries"
                      style="width: 300px"
                    >
                      <option
                        value="yu"
                        data-image="/img/flag-2.jpg"
                        data-imagecss="flag yu"
                        data-title="Indonesia"
                      >
                        Indonesia
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="inner-header">
                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <div class="logo">
                      <a href="{{url('login')}}">
                        <img src="/img/logo1.png" alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3"></div>
                  <div class="col-lg-5 col-md-5">
                    <div class="advanced-search">
                      <div class="input-group">
                        <form action="shopping" class="form-inline" method="GET">
                            <input type="text" placeholder="Nama produk?" />
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-right col-md-2">
                    <ul class="nav-right">
                      <li class="cart-icon">
                        @php
                          $count_carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                        @endphp
                        @if ($count_carts > 0)
                          <a href="#">
                            <i class="icon_bag_alt"></i>
                            <span>
                                {{ $count_carts }}
                            </span>
                          </a>
                        @else
                        <a href="#">
                          <i class="icon_bag_alt"></i>
                        </a>
                        @endif
                        <div class="cart-hover">
                          <div class="select-items">
                            <table>
                              <tbody>
                                @php
                                  $carts = \App\Models\Cart::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();
                                  $totalPrice = 0
                                @endphp

                                @foreach ($carts as $cart)
                                <tr>
                                  <td style="width:15%" class="si-pic">
                                    <img src="{{ $cart->product->galleries->first()->photo }}" alt="" />
                                  </td>
                                  <td class="si-text">
                                    <div class="product-selected">
                                      <p>@currency($cart->product->price) x {{$cart->product->quantity}}</p>
                                      <h6>{{ $cart->product->name }}</h6>
                                    </div>
                                  </td>
                                  <td class="si-close">
                                    <i class="ti-check"></i>
                                  </td>
                                </tr>
                                @php $totalPrice += $cart->product->price @endphp
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="select-total">
                            <span>total:</span>
                            <h5>@currency($totalPrice)</h5>
                          </div>
                          <div class="select-button">
                            <a href="{{url('cart')}}" class="primary-btn view-card">VIEW CART</a>
                            <a href="{{url('checkout')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                          </div>
                        </div>
                      </li>
                      <li class="cart-price">Keranjang</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item">
              <div class="container">
                  <nav class="nav-menu mobile-menu d-flex justify-content-around">
                      <ul>
                          <li class="@yield('home')"><a href="{{url('/')}}">Home</a></li>
                          <li class="@yield('shopping')"><a href="{{url('shopping')}}">Shop</a></li>
                          <li class="@yield('collection')"><a href="{{url('collection')}}">Collection</a></li>
                          <li class="@yield('blog')"><a href="{{url('blog')}}">Blog</a></li>
                          <li class="@yield('contact')"><a href="{{url('contact')}}">Contact</a></li>
                          <li class="@yield('about')"><a href="{{url('about')}}">About Us</a></li>
                          <li>
                              <a href="#">Pages</a>
                              <ul class="dropdown">
                                  <li>
                                      <a href="{{url('cart')}}"
                                          >Keranjang Belanja</a
                                      >
                                  </li>
                                  <li><a href="#">Upload Bukti</a></li>
                                  <li>
                                      <a href="{{url('checkout')}}">Checkout</a>
                                  </li>
                                  <li><a href="{{url('faq')}}">Faq</a></li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
                  <div id="mobile-menu-wrap"></div>
              </div>
          </div>
        </header>
        @endauth
        <!-- Header End -->
