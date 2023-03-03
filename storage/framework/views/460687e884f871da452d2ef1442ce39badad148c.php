
<?php $__env->startSection('content'); ?>



<div class="main-content app-content mt-0">
  <div class="side-app">

      <!-- CONTAINER -->
      <div class="main-container container-fluid">

          <!-- PAGE-HEADER -->
          <div class="page-header">
              <h1 class="page-title">تمت الإضافة</h1>
              <div>
                  <ol class="breadcrumb">
\                        <li class="breadcrumb-item active" aria-current="page">تمت الإضافة</li>
                  </ol>
              </div>
          </div>
          <!-- PAGE-HEADER END -->

          <!-- ROW-1 OPEN -->
                               
      

          <?php if($results->count() > 0): ?>
          <p>نتائج <?php echo e($results->count()); ?> للبحث عن "<?php echo e($query); ?>":</p>
      
          <ul>
              <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="info-frame">
                      <h2><?php echo e($result->name); ?></h2>
                      <p><?php echo e($result->description); ?></p>
                     
                     
                      </div>
                      <div class="gallery-frame">
                        <?php $__currentLoopData = explode(',', $result->filenames); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filename): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php
                            $filename = str_replace(['[', ']','"'], '', $filename);
                          ?>
                          <img src="<?php echo e(asset('files/' . $filename)); ?>" class="gallery-img">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count(explode(',', $result->filenames)) === 0): ?>
                          <p>لا يوجد صور</p>
                        <?php endif; ?>
                      </div>
                
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      
      <?php else: ?>
          <p>No results found for "<?php echo e($query); ?>".</p>
      <?php endif; ?>
          
          
          















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
<?php echo $__env->make('this', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/search2.blade.php ENDPATH**/ ?>