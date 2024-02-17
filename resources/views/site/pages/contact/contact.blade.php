@extends('site.layout.master')

@section('Mtuta Investment Company ltd.') @endsection
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{ asset('site/images/banner/banner1.jpg')}})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="management.php">Management Stucture</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Reaching our Office</h2>
        <h3 class="section-sub-title">Find Our Location</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visit Our Office</h4>
            <p>Posta,Tanzania.</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Email Us</h4>
            <p>info@mtutainvestment.co.tz</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Call Us</h4>
            <p>(+255) 716-628-867</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="google-map">

    <div class="map">
    <div class="gmap_canvas">
        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1104&amp;height=385&amp;hl=en&amp;q=kida plaza&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        <a href="">Mtuta Investment Company Ltd</a>
    </div>
    <style>
    .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:385px;}
    .gmap_iframe {height:385px!important;}
    </style>
    </div>

    <div class="gap-40"></div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Send us a Message</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        @include('site.layout.includes.alerts.success')

        <form role="form" action="{{ route('message.store') }}" method="post">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Subject</label>
                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
              required></textarea>
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
          </div>
          @csrf
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->


<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
