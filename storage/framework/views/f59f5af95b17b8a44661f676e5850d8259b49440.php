<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Freelancer Page</title>
  <link rel="stylesheet" href="css/seller.css">
</head>
<body>
  <header>
   
    <div class="user-profile">
       
      <span class="dropdown">
        <button class="dropbtn"></button>
        <div class="dropdown-content">
            <a href="#">Profile</a>
          <a href="#">Dashboard</a>
          <a href=>Messages</a>
          <a href="#">Notifications</a>
          <a href="#">Settings</a>
          <a href="#">Help</a>
          <a href="">Log out</a>
        </div>
      </span>
    </div>
    <div class="search-container">
      <form action="<?php echo e(route('search')); ?>" method="GET">
        <input type="text" placeholder="Search..." name="search">
        <button type="submit" class="search-button">Search</button>
      </form>
    </div>
    <div class="dropdown">
        <img src="1.png" width="50" height="40" alt="User Profile" class="dropbtn">
        <div class="dropdown-content">
          <a href="">add a job</a>
          <a href="#">Option 2</a>
          <a href="#">Option 3</a>
          <a href="#">Option 4</a>
          <a href="#">Option 5</a>
        </div>

  </header>
  
  <main>


  </main>
  
  <footer>
    

  </footer>

</body>
</html><?php /**PATH C:\wamp64\www\allproj\auth\auth\resources\views/dashboard.blade.php ENDPATH**/ ?>