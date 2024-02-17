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
                <h1 class="banner-title">Our Performance</h1>
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
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">
        @if($achievement !=Null)
          <div class="post-content post-single">
            <div class="post-media post-image">
              <img loading="lazy" src="{{ asset('storage/'.$achievement->image)}}" class="img-fluid" alt="achievs-image">
            </div>

            <div class="post-body">
              <div class="entry-header">
                <div class="post-meta">
                  <span class="post-cat" style="padding-right: 0px; margin-right: 10px">
                   Published On:
                  </span>
                  <span class="post-meta-date"><i class="far fa-calendar-alt"></i> {{ date('M d, Y', strtotime($achievement->date)) }}</span>
                </div>
                <h2 class="entry-title">
                  {{ ucfirst($achievement->title) }}
                </h2>
              </div><!-- header end -->

              <div class="entry-content">
                <p></p>
                <p>{{ ucfirst($achievement->abstract) }}</p>
                </div>

            </div><!-- post-body end -->
          </div><!-- post content end -->
        @else
        <div class="post-content post-single">
          <div class="post-media post-image">
            <img loading="lazy" src="{{ asset('site/images/no-found/no-record-7.jpg') }}" class="img-fluid" alt="achiev-image">
          </div>
        </div>
        @endif

      </div><!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <!-- Recent post start -->
          @include('site.pages.cpperformance.recents')
          <!-- Recent post end -->

          <!-- Achieves start -->
          @include('site.pages.cpperformance.filterByDate')
          <!-- Archives end -->
        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
