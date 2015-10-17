<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{!! Html::style(asset('css/app.css')) !!}
	{!! Html::style(asset('css/style.css')) !!}
	{!! Html::style(asset('css/font-awesome.css')) !!}
</head>
<body>
	<div class="container" id="container">
		<header id="header">
			<div class="header-top">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><a href="#"><i class="fa fa-phone"></i>0905-520-030</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i>phuongit0301@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-map-pin"></i>Danang</a></li>
						</ul>
					</div>
				</div><!--end row-->
			</div><!--end header-top-->
			<div class="search-box">
				<div class="row">
					<div class="col-md-12" id="search" role="search">
						<form method="get">
							<input type="textbox" value="" name="txtSearch" placeholder="Search..." />
							<input type="submit" name="Search" id="btnSearch" class="btn-primary" />
						</form>
					</div>
				</div>
			</div><!--end search-box -->
			<div class="row">
				<h1 class="col-md-12">NEWS</h1>
				
				<div class="col-md-12">
					<nav id="primary-menu">
						<ul>
							<li class="active"><a href="#">HOME</a></li>
							<li><a href="#">PAGES</a></li>
							<li><a href="#">WORLD</a></li>
							<li><a href="#">BUSINESS</a></li>
							<li><a href="#">POLITICS</a></li>
							<li><a href="#">SPORTS</a></li>
							<li><a href="#">HEALTH</a></li>
							<li><a href="#">SCIENCE</a></li>
							<li><a href="#">MUSIC</a></li>
							<li><a href="#">TECH</a></li>
							<li class="search"><a href="#"><i class="fa fa-search"></i>Search</a></li>
						</ul>
					</nav>
				</div>
			</div><!--end row-->
		</header><!--end header-->

		<section id="feature">
			<div class="row">
				<div class="col-md-7">
					col-md-7
				</div>
				<div class="col-md-5">
					col-md-5
				</div>
			</div>
		</section>

		<section id="content">
			<div class="row">
				<div class="col-md-8">
					<div class="row">

						<div class="col-md-6">
							<h3>POPULAR NEWS</h3>
						</div><!--end col-md-6-->
						<div class="col-md-6">
							<h3>HOT NEWS</h3>
						</div><!--end col-md-6-->

						<div class="col-md-12">
							<h3>LIFE STYLE</h3>
						</div>

						<div class="col-md-12">
							<h3>WORLD NEWS</h3>
						</div>

						<div class="col-md-6">
							<h3>BUSINESS NEWS</h3>
						</div><!--end col-md-6-->
						<div class="col-md-6">
							<h3>SPORT NEWS</h3>
						</div><!--end col-md-6-->

					</div><!--end row-->
					
				</div><!--end col-md-8-->
				<div class="col-md-4">
					<h3>STAY CONNECTED</h3>
				</div><!--end col-md-4-->
			</div><!--end row-->
		</section><!--end content-->

		<footer id="footer">
			<div class="row">
				<div class="col-md-4">
					<h3>TWEETS</h3>
				</div>
				<div class="col-md-4">
					<h3>NAVIGATION</h3>
				</div>
				<div class="col-md-4">
					<h3>FLICK STREAM</h3>
				</div>
				<div class="col-md-4">
					<h3>ABOUT</h3>
				</div>
				<div class="col-md-12">
					<small>&copy;&nbsp;Copyright 2015</small>
				</div>
			</div>
		</footer><!--end footer-->
	</div><!--end container-->
</body>
</html>