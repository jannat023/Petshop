<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$qualification = $_POST['qualification'];
		$experience = $_POST['experience'];
		$photo = "groomer.jpg";
		$status = 1;

		// $conn = mysqli_connect('localhost', 'root', '', 'ecomm');
		// $sql = "insert into groomers (email, password, firstname, lastname, address, phone, photo, status) values($email', '$password', '$firstname', '$lastname' ,'$address', '$lastname', '$contact', '$photo', '$qualification', '$experience', '$status')"; 
		// $result = mysqli_query($conn, $sql);

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM groomers WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Email already taken';
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO groomers (email, password, firstname, lastname, address, phone, photo, qualification, experience, status) VALUES (:email, :password, :firstname, :lastname, :address, :phone, :photo, :qualification, :experience, :status)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'firstname'=>$firstname, 'lastname'=>$lastname, 'address'=>$address, 'phone'=>$contact, 'photo'=>$filename, 'qualification'=>$qualification, 'experience'=>$experience, 'status'=>1]);
				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: groomers.php');

?>