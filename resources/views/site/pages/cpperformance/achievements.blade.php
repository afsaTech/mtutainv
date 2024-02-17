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
                <nav aria-label="breadcrumb"></nav>
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
      @if(count($achievements) > 0 || $achievements !=Null)
        @foreach($achievements as $ach)
         <div class="post" @if($loop->last) style="border-bottom: none" @endif>
          <div class="post-media post-image">
            <img loading="lazy" src="{{ asset('storage/'.$ach->image) }}" class="img-fluid" alt="achievs-image">
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author" style="padding-right: 0px; margin-right: 10px">
                  <a href="#">Published on:</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar-alt"></i> {{ date('M d, Y', strtotime($ach->date)) }}</span>
              </div>
              <h2 class="entry-title">
                <a href="{{ route('performance.show', $ach->id) }}">{{ ucfirst($ach->title) }}</a>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <p>{{ mb_strimwidth(ucfirst($ach->abstract),0,342,'...') }}</p>
            </div>

            @if(strlen($ach->abstract) > 342)
            <div class="post-footer">
               <a href="{{ route('performance.show', $ach->id) }}" class="btn btn-primary">Read More</a>
            </div>
            @endif

          </div><!-- post-body end -->
        </div><!--  post end -->
        @endforeach
        @else
          <div class="post" style="border-bottom: none">
           <div class="post-media post-image">
             <img loading="lazy" src="{{ asset('site/images/no-found/no-record-7.jpg') }}" class="img-fluid" alt="achiev-image">
           </div>
           </diV>
         @endif

        <nav class="paging" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">{{ $achievements->render("pagination::simple-bootstrap-4") }}</li>
          </ul>
        </nav>

      </div><!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          <!-- Recent post start -->
          @include('site.pages.cpperformance.recents')
          <!-- Recent post end -->

          <!-- Categories start -->
          @include('site.pages.cpperformance.filterByCategory')
          <!-- Categories end -->

          <!-- Achieves start -->
          @include('site.pages.cpperformance.filterByDate')
          <!-- Archives end -->

        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

<div class="mb-4"></div>
<!-- You can place your fact here below -->
@endsection
