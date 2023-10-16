<!DOCTYPE html>

<head>
	<title>layout đăng ký</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet" />
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css" />
	<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('backend/css/morris.css')}}" type="text/css" />
	<!-- calendar -->
	<link rel="stylesheet" href="{{asset('backend/css/monthly.css')}}">
	<!-- //calendar -->
	<!-- //font-awesome icons -->
	<script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
	<script src="{{asset('backend/js/raphael-min.js')}}"></script>
	<script src="{{asset('backend/js/morris.js')}}"></script>
	<script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>

	<!-- cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
	<section id="container">
		<!--header start-->
		<header class="header fixed-top clearfix">
			<!--logo start-->
			<div class="brand">
				<a href="http://127.0.0.1:8000" class="logo">
					<!-- Sinh viên -->
					<img src="\backend\images\logo_NTU.webp" width="60" height="60" alt="" style=" border-radius:1000px;">
				</a>
				<div class="sidebar-toggle-box">
					<div class="fa fa-bars"></div>
				</div>
			</div>
			<!--logo end-->
			<div>
				
			</div>
			<div class="top-nav clearfix">
				<ul  class="nav pull-left top-menu">
				<li>
				<h5>_ Ứng dụng quản lý và đăng ký đề tài thực tập khoa CNTT Trường Đại học Nha Trang</h5>


				</li>
				</ul>

				<!--search & user info start-->
				<ul class="nav pull-right top-menu">
					<li>

						<!-- <input type="text" class="form-control search" placeholder=" Search"> -->
					</li>
					<!-- user login dropdown start-->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<img alt="" src="images/2.png">
							<span class="username">Sinh viên: {{Auth::user()->name}}</span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu extended logout">
							<li><a href="{{ route('profile.show') }}"><i class=" fa fa-suitcase"></i>Profile</a></li>
							<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
							<li>
								<form method="POST" action="{{ route('logout') }}">
									@csrf

									<button href="{{ route('logout') }}" @click.prevent="$root.submit();">
										{{ __('Đăng xuất') }}
									</button>
								</form>
							</li>
						</ul>
						<!-- <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul> -->
					</li>
					<!-- user login dropdown end -->

				</ul>
				<!--search & user info end-->
			</div>
		</header>
		<!--header end-->
		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse">
				<!-- sidebar menu start-->
				<div class="leftside-navigation">
					<ul class="sidebar-menu" id="nav-accordion">
						<!-- <li>
                    <a class="active" href="/trangdangky">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng quan</span>
                    </a>
                </li> -->

						<li class="sub-menu">
							<a href="javascript:;">
								<i class="fa fa-book"></i>
								<span>Đăng ký đề tài</span>
							</a>
							<ul class="sub">
								<li class="{{ (request()-> is('detaisv')) ? 'active' : '' }}"><a href="/detaisv">Danh sách đề tài đăng ký</a></li>
								<li class="{{ (request()-> is('dangky')) ? 'active' : '' }}"><a href="/dangky">Danh sách đã đăng ký</a></li>
								<li class="{{ (request()-> is('detai1')) ? 'active' : '' }}"><a href="/detai1">Danh sách đề tài</a></li>

							</ul>
						</li>


					</ul>
				</div>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				@yield('trangdangky_content')
			</section>

			<!-- <center>
				<h1>Giao diện trang sinh viên</h1>

			</center>
			<center>
				<img src="\backend\images\anhtruong.jpg" width="800px" height="500px" alt="">

			</center> -->
			<!-- footer -->
			<div class="footer">
				<div class="wthree-copyright">
					<!-- <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
				</div>
			</div>
			<!-- / footer -->
		</section>
		<!--main content end-->
	</section>
	<script src="{{asset('backend/js/bootstrap.js')}}"></script>
	<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
	<script src="{{asset('backend/js/scripts.js')}}"></script>
	<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
	<!-- morris JavaScript -->
	<script>
		$(document).ready(function() {
			//BOX BUTTON SHOW AND CLOSE
			jQuery('.small-graph-box').hover(function() {
				jQuery(this).find('.box-button').fadeIn('fast');
			}, function() {
				jQuery(this).find('.box-button').fadeOut('fast');
			});
			jQuery('.small-graph-box .box-close').click(function() {
				jQuery(this).closest('.small-graph-box').fadeOut(200);
				return false;
			});

			//CHARTS
			function gd(year, day, month) {
				return new Date(year, month - 1, day).getTime();
			}

			graphArea2 = Morris.Area({
				element: 'hero-area',
				padding: 10,
				behaveLikeLine: true,
				gridEnabled: false,
				gridLineColor: '#dddddd',
				axes: true,
				resize: true,
				smooth: true,
				pointSize: 0,
				lineWidth: 0,
				fillOpacity: 0.85,
				data: [{
						period: '2015 Q1',
						iphone: 2668,
						ipad: null,
						itouch: 2649
					},
					{
						period: '2015 Q2',
						iphone: 15780,
						ipad: 13799,
						itouch: 12051
					},
					{
						period: '2015 Q3',
						iphone: 12920,
						ipad: 10975,
						itouch: 9910
					},
					{
						period: '2015 Q4',
						iphone: 8770,
						ipad: 6600,
						itouch: 6695
					},
					{
						period: '2016 Q1',
						iphone: 10820,
						ipad: 10924,
						itouch: 12300
					},
					{
						period: '2016 Q2',
						iphone: 9680,
						ipad: 9010,
						itouch: 7891
					},
					{
						period: '2016 Q3',
						iphone: 4830,
						ipad: 3805,
						itouch: 1598
					},
					{
						period: '2016 Q4',
						iphone: 15083,
						ipad: 8977,
						itouch: 5185
					},
					{
						period: '2017 Q1',
						iphone: 10697,
						ipad: 4470,
						itouch: 2038
					},

				],
				lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
				xkey: 'period',
				redraw: true,
				ykeys: ['iphone', 'ipad', 'itouch'],
				labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
				pointSize: 2,
				hideHover: 'auto',
				resize: true
			});


		});
	</script>
	<!-- calendar -->
	<script type="text/javascript" src="{{asset('backend/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load(function() {

			$('#mycalendar').monthly({
				mode: 'event',

			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

			switch (window.location.protocol) {
				case 'http:':
				case 'https:':
					// running on a server, should be good.
					break;
				case 'file:':
					alert('Just a heads-up, events will not work when run locally.');
			}

		});
	</script>
	<!-- //calendar -->
</body>

</html>