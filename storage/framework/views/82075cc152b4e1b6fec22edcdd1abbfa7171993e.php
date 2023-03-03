
<?php $__env->startSection('content'); ?>



<div class="main-content app-content mt-0">
  <div class="side-app">

      <!-- CONTAINER -->
      <div class="main-container container-fluid">

          <!-- PAGE-HEADER -->
          <div class="page-header">
              <h1 class="page-title">جميع الإضافات</h1>
              <div>
                  <ol class="breadcrumb">
\                        <li class="breadcrumb-item active" aria-current="page">جميع الإضافات </li>
                  </ol>
              </div>
          </div>
          <!-- PAGE-HEADER END -->

          <!-- ROW-1 OPEN -->
                               
      
          <?php $__currentLoopData = $ccps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ccp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="info-frame">
              <h2>الإسم: <?php echo e($ccp->name); ?></h2>
              <h5> السبب: <?php echo e($ccp->description); ?></h5>
              <h4>CCP : <?php echo e($ccp->ccps); ?></h4>
          </div>
              <div class="gallery-frame">
                <?php $__currentLoopData = explode(',', $ccp->filenames); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filename): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    $filename = str_replace(['[', ']','"'], '', $filename);
                  ?>
                  <img src="<?php echo e(asset('files/' . $filename)); ?>" class="gallery-img">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(count(explode(',', $ccp->filenames)) === 0): ?>
                  <p>لا يوجد صور</p>
                <?php endif; ?>
              
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $stors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="info-frame">
                <h2>الإسم: <?php echo e($stor->name); ?></h2>
                <h5> السبب: <?php echo e($stor->description); ?></h5>
                <h4>رقم الهاتف: <?php echo e($stor->number); ?></h4>
            </div>
                <div class="gallery-frame">
                  <?php $__currentLoopData = explode(',', $stor->filenames); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filename): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      $filename = str_replace(['[', ']','"'], '', $filename);
                    ?>
                    <img src="<?php echo e(asset('files/' . $filename)); ?>" class="gallery-img">
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php if(count(explode(',', $stor->filenames)) === 0): ?>
                    <p>لا يوجد صور</p>
                  <?php endif; ?>
                
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          















                              </div>
                            </div>

















<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  const editButtons = document.querySelectorAll('.edit-button');

editButtons.forEach(button => {
  button.addEventListener('click', () => {
    // add your edit functionality here
  });
});

const galleryImgs = document.querySelectorAll('.gallery-img');

galleryImgs.forEach(img => {
  const url = img.getAttribute('src');

  img.addEventListener('click', () => {
    window.open(url);
  });
});



</script>
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/home3.css')); ?>"></head>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('thisuser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/all2.blade.php ENDPATH**/ ?>