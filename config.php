<?php
	$conn = mysqli_connect ('localhost','root','') or die (mysqli_error());
	$select_db = mysqli_select_db ($conn,'myfirstdb') or die (mysqli_error());
?>
