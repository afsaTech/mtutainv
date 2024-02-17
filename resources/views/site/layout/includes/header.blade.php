<!-- Mtuta Investment all site Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="{{ route('home.index') }}">
                 <img loading="lazy" src="{!! asset('site/images/logo.png') !!}" alt="Mtuta Invetment Logo" style="width: 110px; height: 80px">
                </a>
            </div><!--Mtuta Investment Company ltd logo end -->

            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Telephone Number</p>
                          <p class="info-box-subtitle">(+255) 716-628-867</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Send Email</p>
                          <p class="info-box-subtitle">info@mtutainvestment.co.tz</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">P.O.Box 0000</p>
                          <p class="info-box-subtitle">Dar es Salaam,Tanzania</p>
                      </div>
                    </div>
                  </li>

                </ul>
                <!-- Ul end -->
            </div>
            <!-- header right end -->
          </div>
          <!-- logo area end -->

      </div>
      <!-- Row end -->
    </div>
    <!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">

      <!-- Nav start -->
      @include('site.layout.includes.navbar')
      <!-- Nav ends -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
