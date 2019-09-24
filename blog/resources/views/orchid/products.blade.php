<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>澳麒产品 </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/company-assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/company-assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="/company-assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="/company-assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/company-assets/plugins/animate.css">
    <link rel="stylesheet" href="/company-assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/company-assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/company-assets/plugins/animated-headline/css/animated-headline.css">
    <link rel="stylesheet" href="/company-assets/plugins/parallax-slider/css/parallax-slider.css">
    <link rel="stylesheet" href="/company-assets/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="/company-assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="/company-assets/css/theme-colors/red.css" id="style_color">
    <link rel="stylesheet" href="/company-assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/company-assets/css/custom.css">
</head>

<body class="header-fixed  header-fixed-space" >
<div class="wrapper">
    <!--=== Header v6 ===-->
    <div class="header-v6 header-classic-white header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <div class="navbar-brand">
                        <a href="/">
                            <img class="default-logo" src="/company-assets/img/logo3-light.png" alt="Logo">
                            <img class="shrink-logo" src="/company-assets/img/logo3-dark.png" alt="Logo">
                        </a>
                    </div>
                    <!-- ENd Navbar Brand -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav">
                            <li><a href="" class="page-scroll">首页</a></li>
                            <li><a href="#business" class="page-scroll">核心业务</a></li>
                            <li><a href="#wts" class="page-scroll">WTS</a></li>
                            <li><a href="#discovery" class="page-scroll">品质发现</a></li>
                            <!-- Blog -->
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    澳麒产品
                                </a>
                                <ul class="dropdown-menu">
                                    <% WebProductCategory.order('sort asc').select(:id, :name).each do |cate| %>
                                    <li><a href="/products/<%== cate.id %>"><%== cate.name %></a></li>
										<% end %>
									</ul>
								</li>
								<!-- End product -->

								<li><a href="/#export" class="page-scroll">高效出口</a></li>
								<li><a href="/#contact" class="page-scroll">联系方式</a></li>
								<li><a href="/#"><i class="menu-icons-style radius-x fa fa-globe"></i> EN</a></li>
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>

<!--=== Full Height Text Rotater ===-->

		<div class=" bg-color-darker" style="height:200px;background-image: url(/company-assets/img/bg/2.jpg);position:relative; background-repeat: no-repeat;background-attachment:local;background-position-x: center;background-position-y: center;">
			<div class="container valign__middle text-center">
				<h2 class="promo-text-v2 color-light cd-headline letters type margin-bottom-20">
<!--					 Replace the Category Name-->
					 <%== @web_product_category.name %>
				</h2>
			</div>
		</div>
		<!--=== End Full Height Text Rotater ===-->

		<!--=== End Header v6 ===-->

		<!--=== Content Part ===-->
		<div class="content-md" id="business">
			<div class="container">
				<div class="headline-left margin-bottom-60">
					<div class="headline-left margin-bottom-10">
						<div class="row">
							<div class="col-md-12">
								<% @web_product_category.web_products.map do |product| %>

								<div class="row">
									<div class="col-md-12">
										<h3 class="headline-brd"><%== product.name %></h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2 text-center">
										<% if product.cover.present? %>
											<a href="https://wts.orchidwine.com.au/<%== product.cover %>" class="fancybox">
												<img src="https://wts.orchidwine.com.au/<%== product.cover %>" style="height:240px;max-width:180px">
										<% else %>
											<a href="/company-assets/img/products/soul.jpg" class="fancybox">
												<img src="/company-assets/img/products/soul.jpg" style="height:240px;max-width:180px">
										<% end %>
											<br>
											<span class="rounded-x portfolio-box-in">
												<i class="icon-magnifier-add"></i>
											</span>
										</a>

									</div>
									<div class="col-md-10">
										<p>
											<strong>评分：<span class="red_stuff"><%== product.score %></span></strong>
											<i class="red_stuff radius-x fa fa-star"></i><i class="red_stuff radius-x fa fa-star"></i><i class="red_stuff radius-x fa fa-star"></i><i class="red_stuff radius-x fa fa-star"></i><i class="red_stuff radius-x fa fa-star-half"></i>
										</p>
										<p><strong>葡萄品种：</strong><%== product.grape_variety %></p>
										<p><strong>葡萄产区：</strong><%== product.grape_area %></p>
										<p><strong>酿酒师：</strong><%== product.wine_maker %></p>
										<p><strong>入口滋味：</strong><%== product.taste %></p>
										<p><strong>餐饮搭配：</strong><%== product.match %></p>
										<p><strong>产品特点：</strong><%== product.feature %></p>
										<a class="btn-u btn-brd btn-brd-hover btn-u-dark" href="https://wts.orchidwine.com.au/<%== product.pdf %>" target="_blank">下载PDF</a>
									</div>
								</div>
								<hr>

								<% end %>
							</div>
						</div>
					</div>
				</div><!--/end Headline Center-->

			</div><!--/end container-->
		</div>
		<!-- End Content Part -->

		<!--=== Footer Version 1 ===-->
		<div class="footer-v1" id="contact">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="/"><img id="logo-footer" class="footer-logo" src="/company-assets/img/logo2-default.png" alt=""></a>
							<p>创立于2013年，秉承“专业，高效，创新”的核心理念。优秀的团队合作，为你的产品保驾护航。</p>
							<p>全产业链的纵向拓展，以及多样话产品生产，满足您对产品的多种需求，欢迎垂询，参观。</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>阿德莱德CBD办公室</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<small>Address</small>
										<a href="#">208 Gouger Street，Adelaide，SA 5000</a>

									</li>
									<li>
										<small>Phone</small>
										<a href="#">＋61 8 8410 4635</a>
									</li>
									<li>
										<small>E-mail</small>
										<a href="mailto:info@orchidwine.com.au">info@orchidwine.com.au</a>
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>产品出口中心</h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<small>Address</small>
										<a href="#">18 Annie Watt Circuit, Osborne SA 5017</a>

									</li>
									<li>
										<small>Phone</small>
										<a href="#">＋61 8 8341 9999</a>
									</li>
									<li>
										<small>E-mail</small>
										<a href="mailto:info@harbourbottling.com">info@harbourbottling.com</a>
									</li>
								</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>葡萄酒庄园以及产品研发中心</h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<small>Address</small>
										<a href="#">261 Rifle Range Road, Benthany, SA 5352</a>

									</li>
									<li>
										<small>Phone</small>
										<a href="#">+61 8 8563 2716</a>
									</li>
									<li>
										<small>E-mail</small>
										<a href="mailto:blickinstal1@bigpond.com">blickinstal1@bigpond.com</a>
									</li>
								</ul>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
							2013 - 2019 &copy;Orchid Wine Group All Rights Reserved.
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->



	<!-- JS Global Compulsory -->
	<script src="/company-assets/plugins/jquery/jquery.min.js"></script>
	<script src="/company-assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="/company-assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="/company-assets/plugins/back-to-top.js"></script>
	<script src="/company-assets/plugins/smoothScroll.js"></script>
	<!-- <script src="/company-assets/plugins/backstretch/backstretch-ini.js"></script> -->
	<script src="/company-assets/plugins/wow-animations/js/wow.min.js"></script>
	<!-- <script src="/company-assets/plugins/animated-headline/js/modernizr.js"></script> -->
	<!-- <script src="/company-assets/plugins/animated-headline/js/animated-headline.js"></script> -->
	<script src="/company-assets/plugins/jquery.parallax.js"></script>
	<script src="/company-assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="/company-assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<!-- JS Customization -->
	<!-- <script src="/company-assets/js/creative.js"></script> -->
	<!-- <script src="/company-assets/js/creative.min.js"></script> -->
	<script src="/company-assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="/company-assets/js/app.js"></script>
	<script src="/company-assets/js/plugins/fancy-box.js"></script>
	<script src="/company-assets/js/plugins/owl-carousel.js"></script>
	<script src="/company-assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			new WOW().init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!--[if lt IE 9]>
	<script src="/company-assets/plugins/respond.js"></script>
	<script src="/company-assets/plugins/html5shiv.js"></script>
	<script src="/company-assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>
</html>
