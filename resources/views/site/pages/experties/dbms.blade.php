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
                <h1 class="banner-title">Database Management System</h1>
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
          <h3 class="column-title">Database MAnagement System</h3>
          <p style="text-align: justify">
          PMP Hub has cutting edge expertise in integrating ICT technology into M&E
          systems specifically in data collection, database management and routine monitoring.
          We embrace the importance and therefore propagate the use of robust web-based
          database management systems. We encourage our clients to move from the
          traditional method of data collection using pen-and-paper (which is time-consuming
          and error-prone) to using technological advances in data collection through use of
          mobile devices (such as smart phones or Tablet PCs) for improved quality and
          efficiency ofwork.In addition,GPS units (being partofdata collection tools)facilitate in
          capturing geo-located data for comprehensive data analysis.
          Our expertise in databasemanagement systems provide supportin:
        <ul>
            <li>
          Programming questionnaires in Smart Phones and TabletPCs.
          </li>
          <li>
          Databasedesign(Web-based and Stationary).
          </li>
          <li>
          Datamanagement and data cleaning.
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
