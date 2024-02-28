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
                <h1 class="banner-title">Transportation Services</h1>
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
          <h3 class="column-title">Transportation services</h3>
          <p style="text-align: justify">
            <ul>
              <li>
                <b>Streamline your logistics:</b> We offer efficient and reliable transportation solutions for individuals, businesses, and organizations. 
                  Whether you need local deliveries, long-distance hauls, or specialized cargo handling,
                  our experienced team and diverse fleet ensure your goods arrive safely and on time.
              </li>
              <li>
                <b>Tailored solutions:</b> We understand every transportation need is unique. 
                We work closely with you to design a customized plan that meets your specific requirements, budget, and timeline.
              </li>
              <li>
                <b>Peace of mind:</b> We prioritize safety and security throughout the transportation process. 
                Our vehicles are well-maintained and operated by licensed professionals, so you can relax knowing your cargo is in good hands.
              </li>
          </p>

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
