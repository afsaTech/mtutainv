@extends('site.layout.master')

@section('PHP Hub About us') @endsection
@section('content')

<!-- Banner area Start here -->
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('site/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Stationary Services</h1>
                <nav aria-label="breadcrumb">

                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row align-items-left">
        <div class="copyright-info text-left">
          <h3 class="column-title">Stationary Services</h3>
          <p style="text-align: justify">
            <ul>
              <li>
                <b>One-stop shop for all your needs:</b> We offer a wide range of high-quality stationery products to meet the diverse needs of businesses, offices, schools, and individuals.
                From essential office supplies to specialized equipment, we have everything you need to stay organized and productive.
              </li>
              <li>
                <b>Competitive prices:</b> We provide competitive prices on all our stationery items, ensuring you get the best value for your money. 
                We offer bulk discounts and special promotions to help you save even more.
              </li>
              <li>
                <b>Convenient access:</b> Whether you prefer visiting our store, ordering online, 
                or enjoying our delivery services, we make it easy to get the stationery supplies you need,
                when you need them.
              </li>
            </ul>
          </p>

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
