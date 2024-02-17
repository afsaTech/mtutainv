<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">
	<title>@yield('title', 'Mtuta Investment LTD')</title>
	<!-- Mobile Specific Metas
================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
 <!-- All stylesheet here -->
 @include('site.layout.includes.stylesheet')
 @yield('inlineStyle')
</head>

<body>
	<div class="body-inner">
		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<ul class="top-info text-center text-md-left">
							<li><i class="fas fa-map-marker-alt"></i>
								<p class="info-text">Posta Tanzania</p>
							</li>
						</ul>
					</div>
					<!--/ Top info end -->
					<div class="col-lg-4 col-md-4 top-social text-center text-md-right">
						<ul class="list-unstyled">
							<li>
								<a title="Facebook" href="https://www.facebook.com/mtutainvestment"> <span class="social-icon"><i class="fab fa-facebook-f"></i></span> </a>
								<a title="Twitter" href="https://www.instagram.com/mtutainvestment/"> <span class="social-icon"><i class="fab fa-twitter"></i></span> </a>
								<a title="Instagram" href="https://www.instagram.com/mtutainvestment/"> <span class="social-icon"><i class="fab fa-instagram"></i></span> </a>
							</li>
						</ul>
					</div>
					<!--/ Top social end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</div>
		<!--/ Topbar end -->

		<!-- Header start -->
		@include('site.layout.includes.header')
		<!--/ Header end -->

    @yield('content')

		<!-- Footer start -->
		@include('site.layout.includes.footer')
		<!--/ Footer end -->
		@yield('inlineJs')
	</body>
  </html>
