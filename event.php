<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-event.css">
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>
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
    <?php
      $id=$_GET['id'];

      // Include config file
      require_once "config.php";

      $sql="SELECT * FROM tb_Event WHERE ID=".$id;
      $result=mysqli_query($conn,$sql);
      if($result==true) {
        $row=mysqli_fetch_assoc($result);
        $Title=$row['Title'];
        $Description=$row['Description'];
        $Date=$row['Date'];
        $Photo=$row['Photo'];
      }


    ?>



    <img src="images/event1.jpg" class="banner img-fluid event1" alt="...">
<div class="event">

<h1 class="title" name="Title"><?php echo $Title; ?></h1>
  <div class="clearfix">

    <img src="<?php echo $Photo; ?>" class="img col-md-6 float-md-start" alt="...">


        <p class="event-p">
          <?php echo $Description; ?>
        </p>
        <h2 class="date">Date of event: <?php echo $Date; ?></h2>

    <a href="event-user.php" class="more-events">More events...</a>
  </div>
</div>


<button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>


<?php
include_once 'footer.php'

?>

<script type="text/javascript" src="script/index.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
