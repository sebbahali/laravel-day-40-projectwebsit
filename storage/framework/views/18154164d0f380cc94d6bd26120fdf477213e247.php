<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Freelancer Page</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/seller.css')); ?>"></head>
  <link rel="stylesheet" href="<?php echo e(asset('css/home1.css')); ?>"></head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <a href="#">إعدادات</a>
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



  </header>
  
  <main>
    <form method="post" action="<?php echo e(route('store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
		<label for="name">الإسم </label>
		<input type="text" id="name" name="name" required>
    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
    		<label for="description">السبب الكامل</label>
		<textarea id="description" name="description" required></textarea>

		<label for="number">رقم الهاتف </label>
		<input type="number" id="number" name="number" required>

        <div class="input-group realprocode control-group lst increment" >
            <input type="file" name="filenames[]" class="myfrm form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-success" type="button"> <i class="fldemo glyphicon glyphicon-plus"></i>إضافة</button>
            </div>
          </div>
          <div class="clone hide">
            <div class="realprocode control-group lst input-group" style="margin-top:10px">
              <input type="file" name="filenames[]" class="myfrm form-control">
              <div class="input-group-btn"> 
                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> حذف</button>
              </div>
            </div>
          </div>
        
          <button type="submit" class="btn btn-success" style="margin-top:10px">إضافة</button>

		<div class="image-preview"></div>
	</form>

  <?php endif; ?>
    
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

  
    <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".realprocode").remove();
      });
    });
</script>
</body>
</html><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/add_seller.blade.php ENDPATH**/ ?>