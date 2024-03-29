<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volunteer Profile</title>
  <link rel="stylesheet" href="style/volunteer.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php include('./src/components/navbar2.php') ?>


  <section class="banner container">
    <img src="resources/banner3.png" alt="Banner Image">
    
  </section>

  <div class="sub-menu container">
  <div class="row">
      <div class="profile column col-md-2 bg-light">
        <div class="user-details">
            <img src="resources/profile-picture.jpeg" alt="User Avatar">
            <div>
              <h2><strong>User Name</strong></h2>
              <p>Location</p>
            </div>
            <div>
              <p><strong>Number of Opportunities:</strong> <span>37</span></p>
              <p><strong>Connections:</strong><span>120</span></p>
            </div>
            <br>
            <p><strong>About</strong></p>
            <p>I'm dedicated to giving back to my community through volunteer work. Whether it's supporting local charities or environmental initiatives, I'm committed to making a positive impact. Together, let's create a brighter future through service and compassion.</p>
            <br>
            <button class="edit-profile-button btn btn-dark">Edit Profile</button>
        </div>
      </div>
      <div class="column col md-10">
        <ul>
          <li><a href="#">All</a></li>
          <li><a href="#">Volunteers</a></li>
          <li><a href="#">Institutions</a></li>
          <li><a href="#">Following</a></li>
        </ul>
        <section class="gallery container">
          <ul>
            <li><img src="resources/agua.jpeg" alt="Image 1"></li>
            <li><img src="resources/food.jpeg" alt="Image 2"></li>
            <li><img src="resources/golden.jpeg" alt="Image 3"></li>
            <li><img src="resources/tree.jpeg" alt="Image 4"></li>
            <li><img src="resources/uniao.jpeg" alt="Image 5"></li>
            <li><img src="resources/uniao2.jpeg" alt="Image 6"></li>
          </ul>
        </section>
      </div>
    </div>
  </div>
<div class="button-load"> 
    <button class="load-more-button btn btn-dark">Load more</button>
</div>

<?php include('./src/components/footer.php') ?>

</body>
</html>



