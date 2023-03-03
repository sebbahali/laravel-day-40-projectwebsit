<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Upload Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <form method="POST" action="<?php echo e(route('store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      
      <div>
          <label for="images">Upload Images:</label>
          <input type="file" id="images" name="image[]" multiple>
      </div>
      <div>
        <input type="text" name="title">
      </div>
      <button type="submit">Submit</button>
  </form>
 
  </body>
</html>
<?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/now.blade.php ENDPATH**/ ?>