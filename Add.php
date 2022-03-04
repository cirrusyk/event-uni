<?php
	$Title=$_POST['Title1'];
	$Description=$_POST['Description1'];
	$Date=$_POST['Date1'];
	$Photo=$_POST['Photo1'];

	// Include config file
	require_once "config.php";

	$sql = "INSERT INTO tb_Event SET Title='$Title', Description='$Description', Date='$Date', Photo='$Photo'";

	$result=mysqli_query($conn,$sql) or die (mysqli_error($conn));
	if($result==true) {
		header('location:event-organizer.php');
	}
	else {
		echo "Mission Failed";
	}


?>
