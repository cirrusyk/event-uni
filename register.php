<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-register.css">

      <link rel="stylesheet" href="css/style-homepage.css">
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Font Awesome icons -->
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Oswald:wght@500&display=swap" rel="stylesheet">

    <title>SIST Student Union</title>
  </head>

  <body>
    <?php
    include_once 'navbar.php'
     ?>



    <div class="wrapper">

    <img src="images/event-5.jpg" class="banner img-fluid event1" alt="...">

    <h1 class="title">Register</h1>

    <form action="registration.php" method="post">
      <div class="register-form">
        <div class="row g-3 align-items-center">
          <div class="col-8 col-md-2">
            <label class="col-form-label">Full Name </label>
          </div>
          <div class="col-12 col-md-6 input">
            <input type="text" name="full-name" class="reg form-control" required>
          </div>

        </div>
        <div class="row g-3 align-items-center">
          <div class="col-8 col-md-2">
            <label  class="col-form-label">Username</label>
          </div>
          <div class="col-12 col-md-6 input">
            <input type="text"  name="username" class="reg form-control" required>
          </div>

        </div>
        <div class="row g-3 align-items-center">
          <div class="col-8 col-md-2">
            <label  class="col-form-label">Password </label>
          </div>
          <div class="col-12 col-md-6 input">
            <input type="password" name="password"  class="reg form-control" required>
          </div>
        </div>

        <button type="submit" class="btn btn-success btn-lg registerbtn">Register</button>
      </div>

    </form>




      </div>

  </div>



<?php
include_once 'footer.php'

?>

<script type="text/javascript" src="script/index.js"></script>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
