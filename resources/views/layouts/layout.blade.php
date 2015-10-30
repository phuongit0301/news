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
						<div class="main-slider slider-first clearfix">
								<ul class="slider no-padding">
									<li class="current">
										<p class="title"><a href="#">Popular</a></p>
										{!! HTML::image('images/3.png', 'a picture', array('class' => 'thumb absolute')) !!}
										<p class="content">
											<a href="#">Tàu Trung Quốc cản trở Việt Nam cứu nạn 11 ngư dân</a>
											Hơn nửa ngày vượt sóng cứu nạn ngư dân ở Hoàng Sa nhưng tàu SAR 412 không thể tiếp cận các thuy�?n viên do bị 2 tàu Trung Quốc cản trở.
										</p>
									</li>
									<li>
										<p><a href="#">Popular1</a></p>
										{!! HTML::image('images/5.png', 'a picture', array('class' => 'thumb absolute')) !!}
										<p class="content">
											<a href="#">Tàu Trung Quốc cản trở Việt Nam cứu nạn 11 ngư dân</a>
											Hơn nửa ngày vượt sóng cứu nạn ngư dân ở Hoàng Sa nhưng tàu SAR 412 không thể tiếp cận các thuy�?n viên do bị 2 tàu Trung Quốc cản trở.
										</p>
									</li>
								</ul>
								<ul class="slider-nav">
									<li class="prev"><a href="#"><i class="fa fa-arrow-circle-left fa-3x"></i></a></li>
									<li class="next"><a href="#"><i class="fa fa-arrow-circle-right fa-3x"></i></a></li>
								</ul>
						</div><!--end main-slider-->
					</div>
					<div class="col-md-5">
						<div class="slider-child clearfix">
							<div class="main-slider slider slider-second">
								<p class="title"><a href="#">Latest</a></p>
								{!! HTML::image('images/6.png', 'a picture', array('class' => 'thumb')) !!}
								<p class="content">
									<a href="caption">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
									<span>Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.</span>
								</p>
							</div><!--end slider-second-->
							<div class="main-slider slider slider-third">
								<p class="title"><a href="#">Latest</a></p>
								{!! HTML::image('images/31.png', 'a picture', array('class' => 'thumb')) !!}
								<p class="content">
									<a href="caption">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
								</p>
							</div>
							<div class="main-slider slider slider-third">
								<p class="title"><a href="#">Latest</a></p>
								{!! HTML::image('images/41.png', 'a picture', array('class' => 'thumb')) !!}
								<p class="content">
									<a href="caption">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
								</p>
							</div>
						</div><!--end slider-child-->
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
								<h5 class="line-border"><span>POPULAR NEWS</span></h5>
								<ul class="no-padding wrapper">
									<li>
										<a href="#">{!! HTML::image('images/51.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10/10/2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/51.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/51.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/51.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/51.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/51.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>
								</ul>
							</div><!--end col-md-6-->
							<div class="col-md-6">
								<h5 class="line-border"><span>HOT NEWS</span></h5>
								<ul class="no-padding wrapper">
									<li>
										<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>

									<li>
										<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
										<p>
											<span>10-10-2015</span>
											<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
										</p>
										<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
									</li>
								</ul>
							</div><!--end col-md-6-->

							<div class="col-md-12">
								<h5 class="line-border inline">
									<span>LIFE STYLE</span>
									<div class="block-navbar">
										<a href="#" class="previous">Previous</a>
										<a href="#" class="next">Next</a>
									</div>
								</h5>
								<div class="row">
									<div class="col-md-6">
										{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
										<h5 class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
										<span class="meta">
											<i class="fa fa-calendar">10/10/2015</i>
											<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
										</span>
										<p>
											Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
										</p>
									</div>
									<div class="col-md-6">
										<ul class="no-padding wrapper">
											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>
										</ul>
									</div><!--end col-md-6-->
								</div><!--end row-->
							</div><!--end col-md-12-->

							<div class="col-md-12">
								<h5 class="line-border inline">
									<span>WORLD NEWS</span>
									<div class="block-navbar">
										<a href="#" class="previous">Previous</a>
										<a href="#" class="next">Next</a>
									</div>
								</h5>
								<div class="row">
									<div class="col-md-6">
										{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
										<h5  class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
										<span class="meta">
											<i class="fa fa-calendar">10/10/2015</i>
											<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
										</span>
										<p>
											Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
										</p>
									</div>
									<div class="col-md-6">
										<ul class="no-padding wrapper">
											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>

											<li>
												<a href="#">{!! HTML::image('images/9.png', 'a picture', array('class' => 'thumb')) !!}</a>
												<p>
													<span>10-10-2015</span>
													<a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a>
												</p>
												<span class="comment"><i class="fa fa-comments"></i>12 comments</span>
											</li>
										</ul>
									</div><!--end col-md-6-->
								</div><!--end row-->
							</div>

							<div class="col-md-6">
								<h5 class="line-border"><span>BUSINESS NEWS</span></h5>
								<div class="block-content">
									{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
									<h5 class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
									<span class="meta">
										<i class="fa fa-calendar">10/10/2015</i>
										<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
									</span>
									<p>
										Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
									</p>
								</div><!--end block-content-->

								<div class="block-content">
									{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
									<h5 class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
									<span class="meta">
										<i class="fa fa-calendar">10/10/2015</i>
										<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
									</span>
									<p>
										Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
									</p>
								</div><!--end block-content-->

								<div class="block-content">
									{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
									<h5 class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
									<span class="meta">
										<i class="fa fa-calendar">10/10/2015</i>
										<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
									</span>
									<p>
										Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
									</p>
								</div><!--end block-content-->
							</div><!--end col-md-6-->
							<div class="col-md-6">
								<h5 class="line-border"><span>SPORT NEWS</span></h5>
								<div class="block-content">
									{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
									<h5 class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
									<span class="meta">
										<i class="fa fa-calendar">10/10/2015</i>
										<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
									</span>
									<p>
										Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
									</p>
								</div><!--end block-content-->

								<div class="block-content">
									{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
									<h5 class="text-normal"><a href="#">�?�? xuất lập khu dịch vụ nhạy cảm tại một số tỉnh</a></h5>
									<span class="meta">
										<i class="fa fa-calendar">10/10/2015</i>
										<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
									</span>
									<p>
										Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
									</p>
								</div><!--end block-content-->

								<div class="block-content">
									{!! HTML::image('images/24.png', 'a picture', array('class' => 'thumb')) !!}
									<h5 class="text-normal"><a href="#">Tòa quốc tế đồng ý xử vụ Philippines kiện Trung Quốc về 'đường lưỡi bò' Tòa quốc tế đồng ý xử vụ Philippines kiện Trung Quốc về 'đường lưỡi bò' </a></h5>
									<span class="meta">
										<i class="fa fa-calendar">10/10/2015</i>
										<i class="fa fa-tags"><a href="#" class="tags">meta1</a>, <a href="#" class="tags">meta2</a></i>
									</span>
									<p>
										Trước đ�? xuất của lãnh đạo cơ quan phòng chống tệ nạn xã hội TP HCM, đại diện các tỉnh thành như Nam �?ịnh, Hà Nội đ�?u cho rằng cần thận tr�?ng, nghiên cứu kỹ.
									</p>
								</div><!--end block-content-->
							</div><!--end col-md-6-->

						</div><!--end row-->

					</div><!--end col-md-8-->
					<div class="col-md-4">
						<div class="sidebar">
							<h5 class="line-border">
								<span>STAY CONNECTED</span>
							</h5>
							<ul class="social">
								<li>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
									<span>5000</span>
								</li>
								<li>
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									<span>400</span>
								</li>
								<li>
									<a href="#" class="subscrible"><i class="fa fa-rss"></i></a>
									<span>200</span>
								</li>
							</ul>
						</div>
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