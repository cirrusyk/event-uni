<?php
session_start();
header('location:index.php');

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, user_registration);


$fullname = $_POST['full-name'];
$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from usertable where username = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
  echo "Username Already Taken";
}
else {
  $reg= " insert into usertable(fullname , username , password) values ('$fullname' , '$name' , '$pass')";
  mysqli_query($con, $reg);
  echo "Registration succesful";
}

?>
