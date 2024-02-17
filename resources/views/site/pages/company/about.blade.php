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
                <h1 class="banner-title">About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">About Us</h3>
          <p style="text-align: justify">
            Empowering Progress, One Solution at a Time
            <br>  
          For 5 years, Mtuta Investment has been the trusted partner for individuals and organizations across Tanzania and beyond, 
          offering a diverse range of solutions to drive success. 
          From seamless transportation and clearing & forwarding services to expert tax consultancy and essential stationery services,
           we are committed to helping our clients navigate the complexities of their daily operations and achieve their goals.

          </p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url({{ asset('site/images/slider-pages/slide-page1.jpg')}})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Management</h2>
                      </div>
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url({{ asset('site/images/slider-pages/slide-page2.jpg')}})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Area of Exparties</h2>
                      </div>
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url({{ asset('site/images/slider-pages/slide-page3.jpg')}})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Our Performance</h2>
                      </div>
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->


        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

<!-- You can place fact here below -->

<section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title">Quality Monitoring and Evaluation Service</h2>
          <h3 class="section-sub-title">Professional Team</h3>
        </div>
    </div><!--/ Title row end -->

    <div class="row">
        <div class="col-lg-12">
          <div id="team-slide" class="team-slide">
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('site/images/team/team1.jpg') }}" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Nats Stenman</h3>
                      <p class="ts-designation">Managing Director</p>
                      <p class="ts-description">Nats Stenman began his career in Management</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 1 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('site/images/team/team2.jpg') }}" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Angela Lyouer</h3>
                      <p class="ts-designation">Project Manager</p>
                      <p class="ts-description">Nats Stenman began his career in Project Management</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 2 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('site/images/team/team3.jpg') }}" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Mark Conter</h3>
                      <p class="ts-designation">Safety Officer</p>
                      <p class="ts-description">Nats Stenman began his career in safety and Risk Management</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 3 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('site/images/team/team4.jpg') }}" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Ayesha Stewart</h3>
                      <p class="ts-designation">Finance Officer</p>
                      <p class="ts-description">Nats Stenman began his career in Finance Accounting</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 4 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('site/images/team/team5.jpg') }}" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Dave Clarkte</h3>
                      <p class="ts-designation">Civil Engineer</p>
                      <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 5 end -->

              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('site/images/team/team6.jpg') }}" alt="team-img">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Elton Joe</h3>
                      <p class="ts-designation">Site Supervisor</p>
                      <p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div><!--/ social-icons-->
                    </div>
                </div><!--/ Team wrapper end -->
              </div><!-- Team 6 end -->

          </div><!-- Team slide end -->
        </div>
    </div><!--/ Content row end -->
  </div><!--/ Container end -->
</section><!--/ Team end -->
@endsection
