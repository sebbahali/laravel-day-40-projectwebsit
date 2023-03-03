<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
	<meta charset="UTF-8">
	<title>E-SAHARA</title>
	<meta name="description" content="موقع E-SAHARA">
	<meta name="keywords" content="	موقع تحقق من خلفية الزبائن والتجار">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets1/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets1/css/animate.css">
	<link rel="stylesheet" href="assets1/css/video.min.css">
	<link rel="stylesheet" href="assets1/css/slick.css">
	<link rel="stylesheet" href="assets1/css/slick-theme.css">
	<link rel="stylesheet" href="assets1/css/reset.css">
	<link rel="stylesheet" href="assets1/css/style.css">
</head>
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
<!-- Start of header section
	============================================= -->
	<header id="clinox-header" class="clinox-header-section  header-style-one">
		<div class="clinox-header-top-wrap">
			<div class="container">
				<div class="clinox-header-top-content d-flex align-items-center justify-content-between">
					<div class="top-info ul-li">
						<ul>
							<li><i class="far fa-envelope"></i> nourisebbah@gmail.com</li>
						</ul>
					</div>
					<div class="top-social-btn d-flex align-items-center">
					
						<div class="top-btn">
							<a class="d-flex justify-content-center align-items-center" href="register">تسجيل </a>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<div class="clinox-header-logo-cta">
			<div class="container">
				<div class="clinox-header-logo-cta-content d-flex">
					<div class="brand-logo">
						<a href="#"><img src="../assets/images/brand/logo-dark.png" alt=""></a>
					</div>
					<div class="header-cta-wrapper d-flex justify-content-between">
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="header-navigation-content-wrapper">
			<div class="container">
				<div class="header-navigation-content align-items-center d-flex justify-content-between">
					<div class="sticky-brand-logo">
						<a href="#"><img src="../assets/images/brand/g.png" alt=""></a>
					</div>
					<nav class="main-navigation clearfix ul-li">
						<ul id="main-nav" class="nav navbar-nav clearfix">
							<li class="dropdown">
								<a href="register">إنضمام</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="register">تسجيل </a></li>
									<li><a href="login">تسجيل الدخول</a></li>
								
								</ul>
							</li>
						
							</li>
							
							
				
				</div>
			</div>
		</div>
		<div class="mobile_menu">
			<div class="mobile_menu_button open_mobile_menu">
				<i class="fal fa-bars"></i>
			</div>
			<div class="mobile_menu_wrap">
				<div class="mobile_menu_overlay open_mobile_menu"></div>
				<div class="mobile_menu_content">
					<div class="mobile_menu_close open_mobile_menu">
						<i class="fal fa-times"></i>
					</div>
					<div class="m-brand-logo">
						<a  href="!#"><img src="../assets/images/brand/logo-dark.png" alt=""></a>
					</div>
					<nav class="mobile-main-navigation  clearfix ul-li">
						<ul id="m-main-nav" class="nav navbar-nav clearfix">
							<li class="dropdown">
								<a href="register">إنضمام</a>
								<ul class="dropdown-menu clearfix">
									<li><a href="register">تسجيل </a></li>
									<li><a href="login">تسجيل الدخول</a></li>
								
								</ul>
							</li>
						
					</nav>
				</div>
			</div>
			<!-- /Mobile-Menu -->
		</div>
	</header>
	
	
<!-- End of header section
	============================================= -->

<!-- Start of Banner section
	============================================= -->
	<section id="clinox-banner" class="clinox-banner-section position-relative top-position" data-background="assets1/img/banner/b.jpg">
		<div class="container">
			<div class="banner-content position-relative">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="banner-text-wrapper">
							<div class="clinox-section-title headline pera-content">
								<span class="sub-title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">مرحبا بك</span>
								<h1 class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms"><strong class="text-uppercase">Welcome</strong>
									<b>to </b> E-SAHARA
								</h1>
								<p class="wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">هدفنا أن نكون أداة لمساعدة التاجر وكدا لمحاولة تقديم احسن تجربة تسوق إلكتروني ممكنة للزبون </p>
							</div>
							<div class="banner-btn-wrapper d-flex align-items-center wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
								<div class="banner-btn">
									<a class="d-flex justify-content-center align-items-center" href="register"><span>إنضمام للموقع</span></a>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner-form-wrapper headline wow fadeInRight" data-wow-delay="800ms" data-wow-duration="1500ms">
							<h3>شاركنا بأفكارك لتحسين الموقع </h3>
							<form action="<?php echo e(route('msg')); ?>" method="POST">
								<?php echo csrf_field(); ?>
								<input type="text" name="name" placeholder="الإسم">
								<input type="text" name="phone" placeholder="رقم الهاتف">
							
								<textarea name="message" placeholder="رسالتك"></textarea>
								<button type="submit">شاركنا</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of Banner section
	============================================= -->

<!-- Start of Feature section
	============================================= -->
	<section id="clinox-feature" class="clinox-feature-section">
		<div class="container">
			<div class="clinox-feature-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="clinox-feature-inner-item text-center position-relative">
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<span class="line-shape position-absolute"></span>
								<img src="assets1/img/icon/ic1.png" alt="">
							</div>
							<div class="inner-text headline pera-content">
								<h3>شراء من الأنترنت
								</h3>
								<p>تنقسم المتاجر الإلكترونية في الجزائر بين تلك التي توفر خدمة الدفع عند الأستلام كخيار وبين تلك التي تفرض على الزبائن دفع المبلغ كاملا او البعض منه قبل ارسال الطلبية وفي كلتا الحالتين قد يتعرض الزبون للنصب سواء بخسارة مبالغ مالية أو وقته في انتظار سلعة فاسدة

								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="clinox-feature-inner-item text-center position-relative">
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<span class="line-shape position-absolute"></span>
								<img src="assets1/img/icon/ic2.png" alt="">
							</div>
							<div class="inner-text headline pera-content">
								<h3> الزبون الغير جاد
								</h3>
								<p>يتسبب الزبون الغير جاد في العديد من الأضرار للتاجر، فقد يقوم بإضاعة وقت وجهد الموظفين في التعامل معه دون أي عائد مالي. كما أنه قد يؤدي إلى زيادة نسبة الإلغاءات والمرتجعات في حالة شراء المنتجات أو الخدمات دون جدوى، مما يؤثر سلبًا على الأرباح

								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="clinox-feature-inner-item text-center position-relative">
							<div class="inner-icon d-flex justify-content-center align-items-center">
								<span class="line-shape position-absolute"></span>
								<img src="assets1/img/icon/ic3.png" alt="">
							</div>
							<div class="inner-text headline pera-content">
								<h3> التسوق بأمان
								</h3>
								<p>بإستعمال الموقع يمكنك التأكد من خلفية البائع الحر أو المتجر الدي يقوم بعرض السلعة قبل الطب وعليه تحصل على تجربة تسوق أمنة بعيدا عن اي عمليات نصب أو إحتيال أو ضياعة الوقت

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Feature section
	============================================= -->	

<!-- Start of About section
	============================================= -->
	<section id="clinox-about" class="clinox-about-section">
		<div class="container">
			<div class="clinox-about-content">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="clinox-about-img-wrapper position-relative">
							<div class="clinox-about-img1">
								<img src="assets1/img/about/s.jpg" alt="">
							</div>
							
						</div>
					</div>
					<div class="col-lg-6">
						<div class="clinox-about-text-wrap">
							<div class="clinox-section-title headline pera-content pr-text-in">
								<h3 class="sub-title d-inline-block">
									<span class="pr-text-in_item1">
										<span class="pr-text-in_item2">
											<span class="pr-text-in_item3">
												من نحن
											</span>
										</span>
									</span>
								</h3>
								<h2>
									<span class="pr-text-in_item1">
										<span class="pr-text-in_item2">
											<span class="pr-text-in_item3">
E-SAHARA												
											</span>
										</span>
									</span>
								</h2>
								<p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">فكرة الموقع هي لمساعدة التجار لتركيز على الزبائن الجاديين وتطوير بيئة العمل وكدا مساعدة الزبائن في الحصول على افضل تجربة ممكنة عند التسوق الإلكتروني
								</p>
							</div>
							<div class="about-feature-wrapper">
								<div class="about-feature-item-wrap position-relative">
									<div class="about-feature-item d-flex align-items-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
										<div class="about-ft-icon d-flex justify-content-center align-items-center">
											<img src="assets1/img/icon/ic28.png" alt="">
										</div>
										<div class="about-ft-text headline">
											<h3>تجربة تسوق مثالية</h3>
										</div>
									</div>
									<div class="about-feature-item d-flex align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
										<div class="about-ft-icon d-flex justify-content-center align-items-center">
											<img src="assets1/img/icon/ic21.png" alt="">
										</div>
										<div class="about-ft-text headline">
											<h3> تطوير بيئة العمل</h3>
										</div>
									</div>
								</div>
								<div class="clinox-btn wow flipInX" data-wow-delay="400ms" data-wow-duration="1500ms">
									<a class="d-flex align-items-center justify-content-center" href="register"><span> تسجيل</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of About section
	============================================= -->

	
<!-- End of Service section
	============================================= -->











<!-- Start of Blog section
	============================================= -->
	<section id="clinox-blog" class="clinox-blog-section">
		<div class="container">
			<div class="clinox-section-title headline pera-content pr-text-in">
				<h3 class="sub-title d-inline-block">
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
مساعدة							</span>
						</span>
					</span>
				</h3>
				<h2>
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								مساعدة لتطوير نفسك كتاجر <b></b>
							</span>
						</span>
					</span>
				</h2>
			</div>
			<div class="clinox-blog-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="clinox-blog-inner-item">
							<div class="inner-img position-relative">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/UlFI3Jr8TNc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>								<span class="blog-cat">Window Cleaing</span>
							</div>
							<div class="inner-text headline">
								<h3><a href="https://www.youtube.com/watch?v=UlFI3Jr8TNc">التجارة الإلكترونية في الجزائر 2023 اهم العقبات الجزاء الاول
								</a></h3>
								<div class="inner-meta">
								
								</div>
								<div class="more-btn">
									<a class="d-flex justify-content-center align-items-center" href="https://www.youtube.com/watch?v=UlFI3Jr8TNc"><span> شاهد المزيد</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="clinox-blog-inner-item">
							<div class="inner-img position-relative">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/WGOEqNW7Hbs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>								<span class="blog-cat">Window Cleaing</span>
							</div>
							<div class="inner-text headline">
								<h3><a href="https://www.youtube.com/watch?v=WGOEqNW7Hbs">التجارة الالكترونية في الجزائر - كيف أبدا ؟
								</a></h3>
								<div class="inner-meta">
								
								</div>
								<div class="more-btn">
									<a class="d-flex justify-content-center align-items-center" href="https://www.youtube.com/watch?v=WGOEqNW7Hbs"><span> شاهد المزيد</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6  wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="clinox-blog-inner-item">
							<div class="inner-img position-relative">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/QbTDo7jvjI0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>								<span class="blog-cat">Window Cleaing</span>
							</div>
							<div class="inner-text headline">
								<h3><a href="https://www.youtube.com/watch?v=QbTDo7jvjI0">The BEST Facebook Ads Tutorial for Beginners in 2023</a></h3>
								<div class="inner-meta">
								
								</div>
								<div class="more-btn">
									<a class="d-flex justify-content-center align-items-center" href="https://www.youtube.com/watch?v=QbTDo7jvjI0"><span>شاهد المزيد</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of Blog section
	============================================= -->



<!-- Start of Footer section
	============================================= -->
	<footer id="clinox-footer-1" class="clinox-footer-section-1" data-background="assets1/img/bg/footer-bg.jpg"> 
		<div class="container">
			<div class="clinox-footer-widget-wrapper">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="clinox-footer-widget headline pera-content ul-li-block">
							<div class="logo-widget">
								<div class="footer-logo">
									<a href="#"><img src="../assets/images/logo-dark.png" alt=""></a>
								</div>
								<p>الموقع هو فكرة مشروع إتمام شهر الحمدلله في تعلم php laravel
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3">
						<div class="clinox-footer-widget headline pera-content ul-li-block">
							<div class="menu-widget">
								<h3 class="widget-title">انضمام</h3>
								<ul>
									<li><a href="register">تسجيل</a></li>
									<li><a href="login"> تسجيل الدخول</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			<div class="clinox-copyright-wrap text-center">
				Copyright © 2023 E-SAHARA. All rights reserved.
			</div>
		</div>
	</footer>		
<!-- End of Footer section
	============================================= -->	

	<!-- For Js Library -->
	<script src="assets1/js/jquery.min.js"></script>
	<script src="assets1/js/bootstrap.min.js"></script>
	<script src="assets1/js/popper.min.js"></script>
	<script src="assets1/js/jquery.magnific-popup.min.js"></script>
	<script src="assets1/js/appear.js"></script>
	<script src="assets1/js/slick.js"></script>
	<script src="assets1/js/jquery.counterup.min.js"></script>
	<script src="assets1/js/waypoints.min.js"></script>
	<script src="assets1/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets1/js/jquery.filterizr.js"></script>
	<script src="assets1/js/wow.min.js"></script>
	<script src="assets1/js/gmap3.min.js"></script>
	<script src='http://maps.google.com/maps/api/js?key=AIzaSyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM&#038;ver=5.3.2'></script>
	<script src="assets1/js/script.js"></script>
</body>
</html>		<?php /**PATH C:\wamp64\www\allproj\auth\auth1\resources\views/home.blade.php ENDPATH**/ ?>