<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Document</title>
	{!! Html::style(asset('css/app.css')) !!}
	{!! Html::style(asset('css/style.css')) !!}
	{!! Html::style(asset('css/font-awesome.css')) !!}
	{!! Html::script(asset('js/vendor/jquery.js')) !!}
	{!! Html::script(asset('js/vendor/bootstrap.js')) !!}
	{!! Html::script(asset('js/jselect.js')) !!}
</head>
<body>
	<div class="container-fluid no-padding" id="container">
		<header id="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul>
								<li><a href="#"><i class="fa fa-phone"></i>0905-520-030</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>phuongit0301@gmail.com</a></li>
								<li><a href="#"><i class="fa fa-map-pin"></i>Danang</a></li>
							</ul>
						</div>
					</div><!--end row-->
				</div><!--end container-->
			</div><!--end header-top-->
			<div class="container">
				<div class="header-inner">
					<div class="row">
						<h1 class="col-md-2">NEWS</h1>
					</div><!--end row-->
				</div><!--end header-inner-->
			</div><!--end container-->
		</header><!--end header-->
		
		<div class="top-nav">
			<div class="container">
				<div class="row">
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
								<li class="last"><a href="#"><i class="fa fa-search fa-lg"></i></a></li>
							</ul>
						</nav>

						<div class="header-search clearfix">
			                <div class="header-search-filter">
			                  <div class="jelect">
			                    <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
			                    <div tabindex="0" role="button" class="jelect-current">Filter By</div>
			                    <ul class="jelect-options">
									<li data-val="0" tabindex="0" class="jelect-option jelect-option_state_active">Date</li>
									<li data-val="1" tabindex="0" class="jelect-option">Title</li>
									<li data-val="2" tabindex="0" class="jelect-option li-last">CATEGORIES</li>
			                    </ul>
			                  </div><!--end jelect-->
			                  <!-- end jelect --> 
			                </div><!--header-search-filter-->
			                <div class="header-search-form">
								<form class="product-search">
									<input class="product-search-field" id="searchQuery" type="search">
									<button class="product-search-btn ui-btn ui-btn-primary">SEARCH</button>
								</form>
			                </div><!--end header-search-form-->
		             	</div><!--end header-search-->
					</div>
				</div><!--end row-->
			</div><!--end container-->
		</div><!--end top-nav-->

		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="main-slider">
							<div class="box-title">
								<p><a href="#">Popular</a></p>
							</div><!--end box-title-->
							<div class="wrapper">
								<ul class="images">
									<li class="current">
										<img src="" alt="" />
										<p>
											<a class="caption"></a>
										</p>
									</li>
								</ul>
							</div><!--end bg-slider-->
						</div>
					</div>
					<div class="col-md-5">
						col-md-5
					</div>
				</div>
			</div><!--end container-->
		</section>

		<section id="content">
			<div class="container">
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
			</div><!--end container-->
		</section><!--end content-->

		<footer id="footer">
			<div class="container">
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
			</div><!--end container-->
		</footer><!--end footer-->
	</div><!--end container-->
</body>
</html>