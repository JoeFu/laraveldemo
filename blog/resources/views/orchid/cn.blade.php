<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>澳麒酒业 </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css'
          href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

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

<body class="header-fixed">
<div class="wrapper">
    <!--=== Header v6 ===-->
    <div class="header-v6 header-transparent header-dark-dropdown header-sticky">
        <!-- Navbar -->
        <div class="navbar mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-responsive-collapse">
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
                            <li><a href="/cn" class="page-scroll">首页</a></li>
                            <li><a href="/cn#business" class="page-scroll">核心业务</a></li>
                            <li><a href="/cn#wts" class="page-scroll">WTS</a></li>
                            <li><a href="/cn#discovery" class="page-scroll">品质发现</a></li>
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

								<li><a href="/cn#export" class="page-scroll">高效出口</a></li>
								<li><a href="/cn#contact" class="page-scroll">联系方式</a></li>
								<li><a href="/orchid/en"><i class="menu-icons-style radius-x fa fa-globe"></i> EN</a></li>
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v6 ===-->

		<!--=== Full Height Text Rotater ===-->

		<div class="fullheight bg-color-darker" style="background-image: url(/company-assets/img/bg/1.jpg); position:relative; background-repeat: no-repeat;background-attachment:local;background-position-x: center;background-position-y: center; background-size:cover" >
			<div class="container valign__middle text-center">
				<span class="promo-text-v1 color-light animated fadeInDown wow margin-bottom-10" data-wow-duration="1.5s" data-wow-delay=".5s">
					澳麒酒业
				</span>
				<h2 class="promo-text-v2 color-light cd-headline letters type margin-bottom-20">
					品原汁的南澳

				</h2>
			</div>
		</div>
		<!--=== End Full Height Text Rotater ===-->


		<!--=== Content Part ===-->
		<div class="content-md" id="business">
			<div class="container">
				<div class="headline-center margin-bottom-60">
					<div class="col-md-12 md-margin-bottom-50">
						<div class="row">
							<div class="col-md-12"><h2 class="headline-brd">核心业务</h2></div>
							<!--
							<div class="text-left col-md-12"><p >澳麒酒业作为澳大利亚本土的新兴葡萄酒公司，秉承“专业，高效，创新”的公司理念，为消费者提供最原汁的澳大利亚葡萄酒产品。</p></div>
							-->
						</div>
						<br>
					</div>
				</div><!--/end Headline Center-->

				<!-- Service Box -->
				<div class="row text-center margin-bottom-60">
					<div class="col-md-4 md-margin-bottom-50">
						<div class="row">
							<div class="col-md-12"><img alt="" src="/company-assets/img/icons/flat/01.png" class="image-md margin-bottom-20"></div>
							<div class="col-md-12"><h2 class="title-v3-md margin-bottom-10">销售代理</h2></div>
							<div class="text-left col-md-12"><p >澳麒酒业旗下包含4大系列、8个葡萄酒品种以及24款葡萄酒产品。所有产品均来自南澳大利亚州最优产区（BAROSSA VALLEY，LANGHORNE CREEK, LIMESTONE COAST AND MCLAREN VALE），澳麒酒业的产品以及服务，以其优秀的性价比、完善的出口、订货、物流体系，给消费者带来充足信心和优越的消费体验。</p></div>
						</div>
					</div>
					<div class="col-md-4 md-margin-bottom-50">
						<div class="row">
							<div class="col-md-12"><img alt="" src="/company-assets/img/icons/flat/02.png" class="image-md margin-bottom-20"></div>
							<div class="col-md-12"><h2 class="title-v3-md margin-bottom-10">品牌定制</h2></div>
							<div class="text-left col-md-12"><p>澳麒酒业为您提供专属的葡萄酒品牌及产品设计，资深的品牌设计团队完美呈现澳洲最原始的品牌形象。澳麒酒业可以根据您的需求，针对您的目标市场量身定做适合您的产品以及品牌形象。完善的澳大利亚生产供应链体系，以及强大的原料供应商支持，为您提供无忧的、专业的、一站式跨境供应体系。我们可以实现澳洲下单，并在中国15个城市直接提货。</p></div>
						</div>
					</div>
					<div class="col-md-4 md-margin-bottom-50">
						<div class="row">
							<div class="col-md-12"><img alt="" src="/company-assets/img/icons/flat/03.png" class="image-md margin-bottom-20"></div>
							<div class="col-md-12"><h2 class="title-v3-md margin-bottom-10">葡萄园投资</h2></div>
							<div class="text-left col-md-12"><p>澳麒酒业充分融合本地资源，为澳洲很多酒庄提供融资以及资产并购服务，利用中澳之间的桥梁作用，将更多的资产进行重组，并购，并结合优势，合理配置资源的使用和分配。为澳洲的葡萄酒工业带来更多的机会和利益。主营业务涵盖了葡萄园的协助购买、过户及后期种植、维护、葡萄销售等托管服务。</p></div>
						</div>
					</div>
				</div>
				<!-- End Service Box -->

			</div><!--/container -->

			<div class="bg-color-light" id="wts">
				<div class="container content-sm">
					<div class="row">
						<div class="col-md-6 md-margin-bottom-50">
							<img alt="" src="/company-assets/img/main/imac2.png" class="img-responsive">
						</div>
						<div class="col-md-6">
							<br><br><br>
							<div class="headline-left margin-bottom-30">
								<h2 class="headline-brd">WTS系统</h2>
								<p>先进的WTS的在线订货下单系统，实现定制产品的在线下单、定制、出口物流跟踪的全过程实时服务。</p>
							</div>
							<ul class="list-unstyled lists-v2 margin-bottom-30">
								<li><i class="fa fa-check"></i> 在线下单定制自有品牌葡萄酒</li>
								<li><i class="fa fa-check"></i> 可随时追踪订单状态</li>
								<li><i class="fa fa-check"></i> 自有产品品牌与物料全定制</li>
								<li><i class="fa fa-check"></i> 管理自己的酒标与商标数字资产</li>

							</ul>
							<a class="btn-u btn-brd btn-brd-hover btn-u-red" href="https://wts.orchidwine.com.au/admin/login" target="_blank">我要使用</a>
						</div><!--/end row-->
					</div>
				</div>
			</div>
			<div div class="headline-center margin-bottom-20" id="discovery" ></div>
			<div class="container content-sm" >
				<div class="text-center margin-bottom-60">
					<div class="col-md-12 md-margin-bottom-50">
						<div class="row">
							<div class="col-md-12 headline-center"><h2>品质发现</h2></div>
							<div class="text-left col-md-12"><p >对品质的坚持，一直是澳麒酒业的核心。秉承“将最好的南澳大利亚州产品与世界分享”的理念，我们从原料，酿造，灌装，运输的方面严格把关，为消费者提供最优质的产品。同时，我们深挖澳洲的葡萄酒文化，崇尚澳洲的“工作、生活、家庭的完美的平衡” ，将澳洲酿酒师对产品的坚持和执着融入到澳麒的产品中，给您呈现不一样的澳洲葡萄酒。</p></div>
						</div>
						<br>
					</div>
				</div><!--/end Headline Center-->

				<!-- Portfolio Box -->
				<ul class="list-unstyled row portfolio-box">
					<li class="col-sm-4 md-margin-bottom-50">
						<a href="/company-assets/img/main/img9.jpg" title="Planting" data-rel="gallery" class="thumbnail fancybox">
							<img alt="" src="/company-assets/img/main/img9.jpg" class="full-width img-responsive">
						</a>
						<div class="headline-left margin-bottom-10"><h3 class="headline-brd">种植</h3></div>
						<p>好的原料是好葡萄酒的关键，澳麒位于4大产区的多个葡萄园原料基地以及3位核心的葡萄酒种植专家，为你的产品提供最优秀的原料。</p>
					</li>
					<li class="col-sm-4 md-margin-bottom-50">
						<a href="/company-assets/img/main/img22.jpg" title="Project Two" data-rel="gallery" class="thumbnail fancybox">
							<img alt="" src="/company-assets/img/main/img22.jpg" class="full-width img-responsive">
						</a>
						<div class="headline-left margin-bottom-10"><h3 class="headline-brd">酿造</h3></div>
						<p>位于石灰石海岸的葡萄酒酿造基地，采用生物动力学酿造方法，秉承天人合一的理念，生产着世界上最纯净的葡萄酒。 </p>
					</li>
					<li class="col-sm-4">
						<a href="/company-assets/img/main/img18.jpg" title="Project Three" data-rel="gallery" class="thumbnail fancybox">
							<img alt="" src="/company-assets/img/main/img18.jpg" class="full-width img-responsive">
						</a>
						<div class="headline-left margin-bottom-10"><h3 class="headline-brd">评酒</h3></div>
						<p>40多年从业经验的专业酿酒师，为澳麒的品质做出严格的把控，经过挑选产品，等级评定，阶梯化品尝等等方法，对产品进行严格筛选，甄选出最优秀的，以及最适合消费者口感的产品，呈现给大家。</p>
					</li>
				</ul>
				<!-- End Portfolio Box -->
			</div><!--/end container-->

			<!-- Flat Background Block -->

			<div class="flat-bg-block-v1 parallaxBg margin-bottom-60 " id="product">
				<div class="container">
					<div class="row">
						<div class="col-md-2 md-margin-bottom-60">
							<div class="headline-left margin-bottom-20">
								<h2 class="headline-brd">澳麒产品</h2>
								<p>领略原汁南澳，畅想澳洲生活。原汁的澳大利亚澳麒产品，给您带来丰富的葡萄酒体验。</p>
							</div><!--/end Headline Left-->

						</div>
						<div class="col-md-10">
							<img alt="" src="/company-assets/img/main/products.png" class="img-responsive">
						<div class="row">
								<% WebProductCategory.order('sort asc').select(:id, :name).each do |cate| %>
								 <div class="col-lg-2 col-md-2 col-xs-4"><a class="margin20 product" href="http://www.orchidwine.com.au/products/<%== cate.id %>" target="_blank"><i class="fa fa-chevron-circle-right "></i> <%== cate.name %></a></div>
								 <% end %>
					</div>
						</div>

					</div>

				</div><!--/end container-->
			</div>

			<!-- End Flat Background Block -->



			<div class="container">
				<div class="headline-left margin-bottom-40">
					<h2 class="headline-brd">澳麒酒业</h2>
				</div><!--/end Headline Left-->

				<div class="row margin-bottom-60">
					<!-- Owl Carousel v5 -->
					<div class="col-sm-6">
						<div class="owl-carousel-v5">
							<div class="owl-slider-v5">
								<div class="item">
									<img class="full-width img-responsive" src="/company-assets/img/main/img1.jpg" alt="">
								</div>
								<div class="item">
									<img class="full-width img-responsive" src="/company-assets/img/main/img2.jpg" alt="">
								</div>
								<div class="item">
									<img class="full-width img-responsive" src="/company-assets/img/main/img3.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<!-- End Owl Carousel v5 -->
					<div class="col-sm-6">
						<p><a href="#" target="_blank">［－办公室－］</a>位于阿德莱德CBD市区的澳麒办公室承担着“业务洽谈，产品设计，生产调度，企业培训”等业务。办公司地处阿德莱德市区的黄金地段，位于阿德莱德Gouger St的208号，占地210平方米，距离澳洲邮政的物流中心仅仅200米距离，交通十分便利，距离阿德莱德机场也仅仅5公里距离，是开展国际贸易，以及跨国贸易的最佳地段。</p><br>

					</div>
				</div><!--/end row-->
			</div><!--/end container-->


			<div class="bg-color-light" id="export">
			<div class="container" >
				<div class="headline-center margin-bottom-60 " ></div>
				<div class="headline-center" >
					<h2>高效出口</h2>
				</div><!--/end Headline Center-->

				<div class="row margin-bottom-60">
					<div class="col-md-4">
						<div class="content-boxes-v5 margin-bottom-30">
							<i class="rounded-x icon-layers"></i>
							<div class="overflow-h">
								<h3 class="no-top-space"><a href="" target="blank">选择丰富</a></h3>
								<p>超过20种丰富产品选择</p>
							</div>
						</div>
						<div class="content-boxes-v5 md-margin-bottom-30">
							<i class="rounded-x icon-earphones-alt"></i>
							<div class="overflow-h">
								<h3 class="no-top-space"><a href="" target="blank">贴身客服</a></h3>
								<p>10人核心客户服务团队，跟踪服务您的订单</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-boxes-v5 margin-bottom-30">
							<i class="rounded-x icon-wrench "></i>
							<div class="overflow-h">
								<h3 class="no-top-space"><a href="https://wts.orchidwine.com.au/" target="blank">专业定制</a></h3>
								<p>专业设计团队定制你的产品</p>
							</div>
						</div>
						<div class="content-boxes-v5 md-margin-bottom-30">
							<i class="rounded-x icon-user "></i>
							<div class="overflow-h">
								<h3 class="no-top-space"><a href="https://wts.orchidwine.com.au/" target="blank">订单追踪</a></h3>
								<p>先进的WTS电子下单系统，24/7全天监控您的订单</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-boxes-v5 margin-bottom-30">
							<i class="rounded-x icon-settings"></i>
							<div class="overflow-h">
								<h3 class="no-top-space"><a href="http://harbourbottling.com/" target="blank">高速生产</a></h3>
								<p>3000瓶每小时的高速生产线</p>
							</div>
						</div>
						<div class="content-boxes-v5 md-margin-bottom-30">
							<i class="rounded-x icon-star"></i>
							<div class="overflow-h">
								<h3 class="no-top-space"><a href="" target="blank">一站出口</a></h3>
								<p>一站式出口中心，距离集装箱码头仅500米</p>
							</div>
						</div>
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
			</div><!--/end export-->
		</div>
		<!-- End Content Part -->


		<!--=== Footer Version 1 ===-->

		<div class="footer-v1" id="contact">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="/company-assets/img/logo2-default.png" alt=""></a>
							<p>创立于2013年，秉承“专业，高效，创新”的核心理念。优秀的团队合作，为你的产品保驾护航。</p>
							<p>全产业链的纵向拓展，以及多样化产品生产，满足您对产品的多种需求，欢迎垂询，参观。</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-2 md-margin-bottom-40">
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
						<div class="col-md-2 md-margin-bottom-40">
							<div class="headline"><h2>墨尔本办公室</h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<small>Address</small>
										<a href="#">Unit 42/31-39 Norcal Road Nunawading, VIC 3131</a>

									</li>
									<li>
										<small>Phone</small>
										<a href="#"> +61 3 88381017</a>
									</li>
									<li>
										<small>E-mail</small>
										<a href="mailto:info.mel@orchidwine.com.au">info.mel@orchidwine.com.au</a>
									</li>
								</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-2 map-img md-margin-bottom-40">
							<div class="headline"><h2>珀斯 办公室</h2></div>
							<ul class="list-unstyled latest-list">
									<li>
										<small>Address</small>
										<a href="#"> 6 Birchgrove Court, Bibra Lake, WA, 6163</a>

									</li>
									<li>
										<small>Phone</small>
										<a href="#"> +61 448 066 101</a>
									</li>
									<li>
										<small>E-mail</small>
										<a href="mailto:stella.w@orchidwine.com.au">stella.w@orchidwine.com.au</a>
									</li>
								</ul>
						</div><!--/col-md-3-->
						<!-- End Address -->
						<!-- Address -->
                                                <div class="col-md-2 map-img md-margin-bottom-40">
                                                        <div class="headline"><h2>布里斯班 办公室</h2></div>
                                                        <ul class="list-unstyled latest-list">
                                                                        <li>
                                                                                <small>Address</small>
                                                                                <a href="#"> 150 Didbrook st，Robertson，QLD, 4109</a>

                                                                        </li>
                                                                        <li>
                                                                                <small>Phone</small>
                                                                                <a href="#"> +61 422 556 888</a>
                                                                        </li>
                                                                        <li>
                                                                                <small>E-mail</small>
                                                                                <a href="mailto:johnny.chen@orchidwine.com.au">johnny.chen@orchidwine.com.au</a>
                                                                        </li>
                                                                </ul>
                                                </div><!--/col-md-3-->
                                                <!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

	<section class="bg-gray">
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2013-2019 &copy; Orchid Wine Group All Rights Reserved.
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
</section>



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
