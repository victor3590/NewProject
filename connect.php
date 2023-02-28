<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	
	$servername = 'https://cyan.csam.montclair.edu:2083/cpsess3865035164/3rdparty/phpMyAdmin/sql.php?server=1&db=lliguiv1_new+data&table=UserName&pos=0';
	$database = 'lliguiv_new data';
	$username = 'lliguiv1';
	$password = 'Newmontclair1';

	// Database connection
	$conn = new mysqli($servername, $username, $password, $database);
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
