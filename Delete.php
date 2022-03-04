<?php
	$id=$_GET['id'];


	require_once "config.php";

	$sql="DELETE FROM tb_Event WHERE ID=" .$id;

	$result=mysqli_query($conn,$sql) or die(mysqli_error());
	if($result==true) {
		header('location:event-organizer.php');
	}
	else {
		echo "Mission Failed";
	}

?>
