
<?php $__env->startSection('content'); ?>




<main>
    <p>يمكنك البحث سواء بإستعمال رقم الهاتف أو إسم الكامل </p>

    <div class="search-container">
        <form action="<?php echo e(route('search')); ?>" method="GET">
          <input type="text" placeholder="ابحث في قاعدة البيانات ...." name="search">
          <button type="submit" class="search-button">البحث</button>
        </form>
      </div>
  </main>
  
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>













<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/home4.css')); ?>"></head>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>

    const searchContainer = document.querySelector('.search-container');
    searchContainer.classList.add('animated');
    
    
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('this', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/search_seller.blade.php ENDPATH**/ ?>