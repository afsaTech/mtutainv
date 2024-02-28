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
                <h1 class="banner-title">Clearing and Forwarding Services</h1>
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
          <h3 class="column-title">Clearing and Forwarding Services</h3>
          <p style="text-align: justify">
            <ul>
              <li>
                <b>Seamless international trade:</b> We handle all aspects of your import and export needs,
                  ensuring smooth and efficient customs clearance and international freight forwarding.
                  Our expertise simplifies the complexities of global trade, saving you time and resources.
              </li>
              <li>
                <b>Global network:</b> We have a well-established network of partners around the world, 
                  allowing us to offer competitive rates and reliable service for your international shipments.
              <li>
              <li>
                <b>Compliance expertise:</b> Our team stays up-to-date on all import and export regulations, 
                  ensuring your shipments comply with all necessary requirements, avoiding delays and complications.
              </li>
          </p>

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
