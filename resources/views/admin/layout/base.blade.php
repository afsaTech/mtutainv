<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title', 'PMP Hub Admin')</title>
	<!-- /.All stylesheet -->
	@include('admin.layout.includes.__allStylesheet')
	@stack('inlineStyle')
</head>
<body>
	<div id="wrapper">
		<!-- /. NAV TOP START -->
		@include('admin.layout.barMenu.navbar')
		<!-- /. NAV TOP END -->

		<!-- /. NAV SIDE START -->
		@include('admin.layout.barMenu.sidebar')
		<!-- /. NAV SIDE  END -->

		<!-- /. MAIN CONTENTS -->
		@yield('content')
	</div>
	<!-- /. WRAPPER  -->

	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	@include('admin.layout.includes.__allJs')
	@stack('inlineJs')
</body>
</html>
