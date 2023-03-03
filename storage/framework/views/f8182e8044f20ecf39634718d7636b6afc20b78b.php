<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Freelancer Page</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/seller.css')); ?>"></head>
  <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>"></head>

<body>
  <header>

    <?php if(Auth::check()): ?>
  <?php $user = Auth::user() ?>
  <div class="user-profile">
    <img src="<?php echo e(asset('storage/' . $user->path1)); ?>" width="200" height="100">
    <span class="dropdown">
      <button class="dropbtn"><?php echo e($user->name); ?></button>
      <div class="dropdown-content">
        <a href="all">كل الإضافات الشخصية   </a>
        <a href="<?php echo e(route('info')); ?>">إعدادات</a>
        <a href="home_seller">الرئيسية</a>
		<a href="add_seller">إضافة</a>
        <a href="search_seller">البحث</a>
        <a href="">تسجيل الخروج</a>
      </div>
    </span>
  </div>
  <div class="search-container">
    <form action="<?php echo e(route('search')); ?>" method="GET">
      <input type="text" placeholder="ابحث في قاعدة البيانات ...." name="search">
      <button type="submit" class="search-button">البحث</button>
    </form>
  </div>

<?php endif; ?>

  </header>
  
  <main>

    <!-- feature start -->
			<div class="feature pt-120 pb-120">
				<div class="container">
					<div class="row feature__row">
						<div class="col-lg-4 col-md-6 feature__col mt-50">
							<div class="feature__item wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
								<div class="icon">
									<i class="flaticon-house"></i>
								</div>
								<h3 class="feature__title"><a href="service-single.html">إضافة تبليغ</a></h3>
								<p>يمكنك إضافة تبليغ عن طريق الضغط على زر إضافة ثم إضافة رقم زبون و ووصف كامل للسبب مع اضافة صور لقطات للشاشة لتبرير  .</p>
								<div class="feature__link">
									<a href="add_seller" class="btn">إضافة<i class="flaticon-right-arrow"></i></a>
								</div>
								<span class="feature__number">01</span>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 feature__col mt-50">
							<div class="feature__item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
								<div class="icon">
									<i class="flaticon-thumbs-up"></i>
								</div>
								<h3 class="feature__title"><a href="service-single.html">البحث في قاعدة بيانات </a></h3>
								<p>يمكنك البحث بإستعمال رقم الزبون في قاعدة البيانات عن طريق مربع البحث اعلى شاشة أو بالضغط على زر البحث للعثور على جميع التبليغات المنشورة من طرف البائعين </p>
								<div class="feature__link">
									<a href="add_seller" class="btn">البحث<i class="flaticon-right-arrow"></i></a>
								</div>
								<span class="feature__number">02</span>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 feature__col mt-50">
							<div class="feature__item wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
								<div class="icon">
									<i class="flaticon-house-1"></i>
								</div>
								<h3 class="feature__title"><a href="service-single.html">كيف يعمل الموقع</a></h3>
								<p>الموقع يعمل كحلقة وصل بين بائعين في مايتعلق بتقليل مشكلة الزبائن الغير جاديين أو حلها نهائيا ,يهدف موقع لجمع أكبر قاعدة بيانات لتحقيق الهدف المرغوب يجب تبليغ عن أي زبون غير جاد .</p>
								<div class="feature__link">
									<a href="service-single.html" class="btn">المزيد <i class="flaticon-right-arrow"></i></a>
								</div>
								<span class="feature__number">03</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- feature end -->
    
  </main>
  
  <footer>
    <img src="logo.png" alt="Logo">
    <nav>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Copyright</a></li>
      </ul>
    </nav>
  </footer>
<script>
    // Wow.js initialization
new WOW().init();

// Get the button element
const btn = document.querySelector('.btn');

// Add a click event listener to the button
btn.addEventListener('click', () => {
  // Do something when the button is clicked
  console.log('Button clicked!');
});

</script>
  
</body>
</html><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/home_seller.blade.php ENDPATH**/ ?>