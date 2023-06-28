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
                    <a href="{{url('/')}}" class="login-panel"
                        ><i class="fa fa-home"></i>Home</a
                    >
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
                    <a href="{{url('/')}}" class="login-panel"
                        ><i class="fa fa-home"></i>Home</a
                    >
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
    </header>
@endauth
<!-- Header End -->
