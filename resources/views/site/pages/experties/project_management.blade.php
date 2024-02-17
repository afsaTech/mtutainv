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
                <h1 class="banner-title">Project Management</h1>
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
          <h3 class="column-title">Project Management</h3>
          <p style="text-align: justify">
          PMP Hub can partner with clients in managing projects through application of knowledge, skills, tools,
          and techniques to project activities to meet the project requirements.
          Our approach to project management training mirrors those of PMI PMP approaches.
          </p>
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
