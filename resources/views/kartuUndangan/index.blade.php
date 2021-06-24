
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ajeng &amp; bobi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="https://wedding2.fadly.xyz/wedding/css/style.css">

	<!-- Modernizr JS -->
	<script src="https://wedding2.fadly.xyz/wedding/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="https://wedding2.fadly.xyz">Wedding<strong>.</strong></a></div>
				</div>
			</div>
			
		</div>
	</nav>

	
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{asset('storage/background/'. $undangan->image)}});background-size: 100%;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>{{$undangan->nama_pengantin1}} & {{$undangan->nama_pengantin2}}</h1>
							<h2></h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>{{$undangan->salam}}</h2>
					<h3>{{date('d F Y', strtotime($undangan->tanggal_acara))}}</h3>
					<p>{{$undangan->mukadimah}}</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{asset('storage/pengantin/'. $undangan->gambar_1)}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>{{$undangan->nama_pengantin1}}</h3>
						<p>{{$undangan->keterangan_1}}</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{asset('storage/pengantin/'. $undangan->gambar_2)}}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>{{$undangan->nama_pengantin2}}</h3>
						<p>{{$undangan->keterangan_2}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- <div id="fh5co-event" class="fh5co-bg" style="background-image:url(https://wedding2.fadly.xyz/wedding/images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<!-- <span>Our Special Events</span> -->

					<h2>Acara</h2>
				</div>
			</div>
						<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Akad Nikah</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>07:30</span>
										<span>17:00</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Minggu</span>
										<span>18 Juli 2021</span>
									</div>
									<p>Akad nikah bertempat di kediaman mempelai wanita</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>RESEPSI</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>10:00</span>
										<span>17:00</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Minggu</span>
										<span>18 Juli 2021</span>
									</div>
									<p>Resepsi bertempat di kediaman mempelai wanita</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	
	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Aku memilih mu untuk menua bersama</span>
					<h2>Berjanji untuk saling mengasihi dan mengampuni seumur hidup</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
									    	</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Terima Kasih Teruntuk</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-circle"></i>
						</span>
						<div class="feature-copy">
							<h3>.Tenda Biru</h3>
							<p>.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>.Mak Andam</h3>
							<p>.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>.Sopo Jarwo</h3>
							<p>.</p>
						</div>
					</div>

				</div>
			</div>

			
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						<small class="block">Modified by <a href="http://sangcahaya.com/" target="_blank">sangcahaya.com</a> | Fadly Shafa</small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="https://wedding2.fadly.xyz/wedding/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="https://wedding2.fadly.xyz/wedding/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="https://wedding2.fadly.xyz/wedding/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="https://wedding2.fadly.xyz/wedding/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="https://wedding2.fadly.xyz/wedding/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="https://wedding2.fadly.xyz/wedding/js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="https://wedding2.fadly.xyz/wedding/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="https://wedding2.fadly.xyz/wedding/js/jquery.magnific-popup.min.js"></script>
	<script src="https://wedding2.fadly.xyz/wedding/js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="https://wedding2.fadly.xyz/wedding/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="https://wedding2.fadly.xyz/wedding/js/main.js"></script>

	<script>
    var d = new Date(new Date("June 24, 2021 07:30:00").getTime());

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>

	</body>
</html>

