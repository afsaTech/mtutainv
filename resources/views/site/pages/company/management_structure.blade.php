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
                <h1 class="banner-title">Structure and Management </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item">Board of Directors</li>
                      <li class="breadcrumb-item">Managing Director</li>
                      <li class="breadcrumb-item">Legal Services</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row align-items-center">
        <div class="copyright-info text-center">
          <h3 class="column-title">Company Structure and Management</h3>
          <p style="text-align: justify">
          PMP Hub maintains a strategic management structure envisioned to ensuring successful
          consultancy services to it's clients.Tomeet the demand of other consultancies, the
          company regularly hires temporary additional experienced professionals with related
          expertise in the fields of engagement. The overall organization structure of the company is
          as shown below.
          </p>

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<!-- Management structure Banner -->
<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url({{ asset('site/images/management-structure.png')}})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
          </div>
        </div>
    </div>
  </div>
</div>

 <div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
