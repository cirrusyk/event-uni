<?php
	$id=$_POST['id'];
	$Title=$_POST['Title'];
	$Description=$_POST['Description'];
	$Date=$_POST['Date'];
	$Photo=$_POST['Photo'];



	// Include config file
	require_once "config.php";

	$sql="UPDATE tb_Event SET Title='$Title', Description='$Description', Date='$Date', Photo='$Photo' WHERE id='$id'";

	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($result==true) {
		header("location:event-edit.php?id=" . $_POST['id']);

	}
	else {
		echo "Mission Failed";
	}


?>
