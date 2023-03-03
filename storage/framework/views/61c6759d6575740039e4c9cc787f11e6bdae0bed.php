<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Freelancer Page</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/seller.css')); ?>"></head>
  <link rel="stylesheet" href="<?php echo e(asset('css/home2.css')); ?>"></head>

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
        <a href="edit_info">إعدادات</a>
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
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="info-frame">
          <h2>الإسم الكامل :<?php echo e($Rtr->name); ?></h2>
          <p>السبب :<?php echo e($Rtr->description); ?></p>
          <p>رقم الهاتف :<?php echo e($Rtr->number); ?></p>
        </div>
      </div>
      
      <div class="col-md-9">
        <div class="gallery-frame">
          <?php if(count($files) > 0): ?>
            <div class="gallery">
              <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset('files/' . $file)); ?>" class="gallery-img">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php else: ?>
            <p>لم تثم اضافة الصور </p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <a href="<?php echo e(route('edit_seller',['Rtr'=>$Rtr['id']])); ?>" class="edit-button">تعديل</a>      </div>

    

   
    
  </main>
  
  <footer>
    <img src="<?php echo e(asset('logo.png')); ?>" alt="Logo">
    <nav>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Copyright</a></li>
      </ul>
    </nav>
  </footer>
<script>
   
 

   const gallery = document.querySelector('.gallery');

if (gallery) {
  const galleryImgs = gallery.querySelectorAll('.gallery-img');

  galleryImgs.forEach(img => {
    const url = img.getAttribute('src');

    img.addEventListener('click', () => {
      window.open(url);
    });
  });
}


</script>
  
</body>
</html><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/show_seller.blade.php ENDPATH**/ ?>