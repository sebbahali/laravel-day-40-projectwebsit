<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Freelancer Page</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/seller.css')); ?>"></head>
  <link rel="stylesheet" href="<?php echo e(asset('css/home5.css')); ?>"></head>

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
<main>
<div class="container">
    <h1>Edit Profile</h1>
    <form action="<?php echo e(route('update', $user->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $user->name)); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email', $user->email)); ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <div class="form-group">
            <label for="image">Profile Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

   
    
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
   
// Animate the form labels
const inputs = document.querySelectorAll('.form-group input');

inputs.forEach(input => {
  input.addEventListener('focus', () => {
    const label = input.previousElementSibling;
    label.style.transform = 'translateY(-30px)';
    label.style.fontSize = '14px';
    label.style.color = '#4CAF50';
  });

  input.addEventListener('blur', () => {
    if (input.value === '') {
      const label = input.previousElementSibling;
      label.style.transform = '';
      label.style.fontSize = '';
      label.style.color = '';
    }
  });
});

// Show selected file name in the file input label
const fileInput = document.getElementById('image');
const fileLabel = document.querySelector('.form-group label[for="image"]');

fileInput.addEventListener('change', () => {
  const fileName = fileInput.value.split('\\').pop();
  fileLabel.innerHTML = `Profile Image: ${fileName}`;
});


</script>
  
</body>
</html><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/info.blade.php ENDPATH**/ ?>