<?php
session_start();
if(!isset($_SESSION['username'])) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshow-style.css">
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
include_once 'navbar-logout.php'



?>



    <img src="images/event-8.jpg" class="banner img-fluid event1" alt="...">


  <form method="post" action="Add.php" >
    <div class="event form">
      <h1 class="title">Event name</h1>
      <input type="text" class="form-control" name="Title1" placeholder="Name of the event">
      <h1 class="title">Pictures/Videos</h1>

        <input name="Photo1" class="form-control" placeholder="image/video link...">
    <textarea name="Description1" class="form-control descr" rows="5" placeholder="Description...."></textarea>
    <h1 class="title">Date of the event</h1>
    <input type="date" name="Date1" class="form-control">



      <button type="submit" class="btn btn-success btn-lg confirm rounded-0">Confirm</button>
    </div>
  </form>


  <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>


<?php
include_once 'footer.php'

?>

<script type="text/javascript" src="script/index.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
