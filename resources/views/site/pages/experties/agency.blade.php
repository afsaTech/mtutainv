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
                <h1 class="banner-title">Data Collection agency</h1>
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
          <h3 class="column-title">Data Collection agency</h3>
          <p style="text-align: justify">
          PMP Hub also accepts contractual agreements for data collection from clients’ sites of operations.
          Our implementation approach on this is through:
      <ul><li>
          Settingupon-site data collectioncenters andtraining on-site data collectors to
          be competent in collating data from service points and transmitting to central office.
        </li>
        <li>
        Setting up aweb-based data collection system and training staff tomanage data.
        </li>
        <li>
        Data entry of already collected data.
        </li>
        Providing advice on data storage(of both physicalforms and soft copies).
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
