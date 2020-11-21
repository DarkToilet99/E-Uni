<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Database connection...
	&conn = new mysqli('localhost','root','','database_name');
	if($conn->connect_error)
	{
		die('Conection Failed : '.$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into registration(firstName, lastName, email, password) values(?,?,?,?)");
		$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
		$stmt->execute();
		echo "Now you are registred";
		$stmt->close();
		$conn->close();
	}
?>