@extends('site.layout.master')

@section('Mtuta investment Company LTD') @endsection
@section('content')
<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url({{asset('site/images/slider-main/bg1.jpg')}})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-title" data-animation-in="slideInLeft">Smartness</h2>
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Konwladge and practice</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="services.html" class="slider btn btn-primary">Our Services</a>
                    <a href="address.php" class="slider btn btn-primary border">Map and Direction</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('site/images/slider-main/bg2.jpg')}})">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">Clearing and Forwarding Services</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                <p data-animation-in="slideInRight">
                    <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{asset('site/images/slider-main/bg3.jpg')}})">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Exparties</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Provision of reliable Transprt and Stationary Services</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on Clearing and Forwarding (C&F)</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Equire</a>
              </div>
          </div>
          <!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title">Our Background</h2>
              <h3 class="into-sub-title">We save</h3>
              <!-- Background paragraps begains here-->
              <p style="text-align: justify">
                Empowering Progress, One Solution at a time for five years, Mtuta Investment has been the trusted partner for individuals and organizations across Tanzania and beyond, 
                offering a diverse range of solutions to drive success. From seamless transportation and clearing & forwarding services to expert tax consultancy and essential stationery services,
                we are committed to helping our clients navigate the complexities of their daily operations and achieve their goals.
                
                </p>
          </div><!-- Intro box end -->
          <div class="gap-20"></div>
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">vision and mission</h3>
          <p> </p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          vision
                      </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">

                    <p style="text-align: justify">
                        To be the leading provider of integrated business solutions in Tanzania and beyond,
                        recognized for excellence, reliability, and innovation.
                    </p>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          mission
                      </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <p style="text-align: justify">
                      <ul>
                        Empowering individuals and businesses through seamless logistics,
                        financial expertise, essential supplies, and efficient trade pathways.
                    </p>
                    </div>
                </div>
              </div>

          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

@include('site.layout.includes.inspages.fact')

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
  <section id="news" class="news">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Recent and Past Performance</h3>
          </div>
      </div>
      <!--/ Title row end -->

    <div class="row">

      @foreach($recents as $recent)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{ asset('storage/'.$recent->image) }}" alt="img">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                  <a href="news-single.html" class="d-inline-block">{{ mb_strimwidth(ucfirst($recent->title),0,62,'...') }}</a>
                </h4>
                <div class="latest-post-meta">
                  <span class="post-item-date">
                    <i class="fa fa-clock-o"></i>{{ date('M , Y', strtotime($recent->date)) }}
                  </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->
      @endforeach

        </div><!-- 3rd post col end -->
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="{{ route('performance.achievs') }}">See All Posts</a>
    </div>
  </div>
  <!--/ Container end -->
</section>
@endsection
