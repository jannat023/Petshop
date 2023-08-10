<?php
	include 'includes/session.php';

	if(isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$date = $_POST['date'];
		$gname = $_POST['gname'];
		$services = $_POST['services'];
		$status = 0;
		$now = date("Y-m-d");



		// try{

		// $conn = mysqli_connect('localhost', 'root', '', 'ecomm');
		// $sql = "insert into appointment (firstname, lastname, email, contact, address, appdate, gname, services, status, datetime) values($firstname', '$lastname', '$email', '$contact' ,'$address', '$date', '$gname', '$services', '$status', '$now')"; 
		// $result = mysqli_query($conn, $sql);

		// echo "success";
		// }
        // catch(PDOException $e){
        //   echo $e;
        // }

		$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("INSERT INTO appointment (firstname, lastname, email, contact, address, appdate, gname, services, status, currdate, uid) VALUES (:firstname, :lastname, :email, :contact, :address, :appdate, :gname, :services, :status, :currdate, :uid)");
				$stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'contact'=>$contact, 'address'=>$address, 'appdate'=>$date, 'gname'=>$gname, 'services'=>$services, 'status'=>$status, 'currdate'=>$now, 'uid'=>$user['id']]);
				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Fill up edit user form first';
	}

	header('location: status.php');

?>