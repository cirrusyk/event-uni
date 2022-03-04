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
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Font Awesome icons -->
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Oswald:wght@500&display=swap" rel="stylesheet">

    <title>SIST Student Union - Events</title>
  </head>
  <body>

        <?php
        include_once 'navbar-logout.php'



         ?>
    <img src="images/event-8.jpg" class="banner img-fluid event1" alt="...">
<form action="add-event.php">
<button type="submit" class="btn btn-success btn-lg rounded-0" id="add-event">Add Event</button>
</form>

    <h1 class="title">Latest added events</h1>


    <div class="row row-cols-1 row-cols-md-3 g-0">

      <?php
        // Include config file
        require_once "config.php";

        $sql = "SELECT * FROM tb_Event ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql) or die (mysqli_error($conn));
        if($result==true){
          While($row=mysqli_fetch_assoc($result)) {
            $id=$row['ID'];
            $Title=$row['Title'];
            $Description=$row['Description'];
            $Date=$row['Date'];
            $Photo=$row['Photo'];
            ?>

      <div class="col">
              <div class="card h-100 rounded-0">
                <a href="event-edit.php?id=<?php echo $id; ?>">
                  <img src="<?php echo $Photo; ?>" class="card-img-top" alt="...">
                </a>


                <div class="card-body">
                  <h5 class="card-title"><?php echo $Title; ?></h5>
                  <p class="card-text"><?php echo $Description; ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo $Date; ?> </small>
                </div>
              </div>
            </div>



        <?php
        }
      }
    ?>
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
