frontend<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

  {{--jquery--}}
  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
  {{--endjquery--}}

  {{--bootstrap--}}
  <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3/css/bootstrap.min.css') }}">
  <script> scr="{{ asset('bootstrap-5.3.3/js/bootstrap.bundle.min.js') }}"</script>
  {{--end bootstrap--}}

  {{--customize--}}
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">k
  <script src="{{ asset('assets/js/script.js') }}"></script>
  {{--end customize--}}


	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="responsive.css">

</head>
<body>
    @include('frontend.header')
		@include('frontend.hero')
		@include('frontend.product_section')
		@include('frontend.testimonail')
		@include('frontend.advertisement')
		@include('frontend.lastest')
		@include('frontend.logo')
		@include('frontend.footer')


  	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
</body>