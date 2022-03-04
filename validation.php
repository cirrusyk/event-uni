<?php
session_start();


$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, user_registration);

$fullname = $_POST['full-name'];
$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from usertable where username = '$name' && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
  $_SESSION['username'] = $name;
  header('location:event-organizer.php');

}
else {

     header('location:index-err.php');
}

?>
