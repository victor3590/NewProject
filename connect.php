<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	
	$servername = 'localhost';
	$database = 'lliguiv_new data';
	$username = 'lliguiv1';
	$password = 'Newmontclair1';
	$port= '3306';

	// Database connection
	$conn = new mysqli($servername, $username, $password, $database, $port);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, LastName, Id, password) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $firstName, $lastName,, $Id, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
