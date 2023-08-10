<?php
	if(isset($_GET['approve'])){

		$id = $_GET['approve'];
		$conn = mysqli_connect('localhost', 'root', '', 'ecomm');
        $sql = "UPDATE appointment SET status = '1' WHERE id = '$id'";
      	$result = mysqli_query($conn, $sql);
		header('Location: appointment.php');
	}
	else{
		$id = $_GET['Cancel'];
		$conn = mysqli_connect('localhost', 'root', '', 'ecomm');
        $sql = "UPDATE appointment SET status = '2' WHERE id = '$id'";
      	$result = mysqli_query($conn, $sql);
		header('Location: appointment.php');
	}
	
?>