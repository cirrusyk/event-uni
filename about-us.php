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
    <img src="images/event1.jpg" class="banner img-fluid event1" alt="...">

    <h1 class="title">About us</h1>
    <div class="about-us">
      <div class="clearfix">
        <img src="images/about-us.jpg" class="img col-md-6 float-md-end" alt="...">

        <p class="about-p">
          For 18 Years, SIST has delivered British education in Morocco awarding Bachelor, Masters and MBA degrees from Cardiff Metropolitan University, and is a unique higher education institute which operates entirely in English in Morocco. SIST students are privileged to receive British education and are awarded worldwide recognised degrees. SIST is also accredited by the Ministry of Higher Education in Morocco. Our graduates are taking over the English business world with their qualifications, fluency in three languages and abilities acquired through a British curriculum that teaches them the highest standards of professionalism and deliver success to any business they join.


        </p>

        <h1 class="title">Developer</h1>

        <p class="about-p">
          My name is Yousra Elhour, I'm a student in SIST. I'm currently preparing for my software engineering degree. I have a passion for UI effects, animations and creating intuitive, dynamic user experiences.
        </p>


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
