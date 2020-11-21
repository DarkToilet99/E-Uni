<?php
function insert_into_tabel()
{

	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$id = 0;
	//Database connection...
	$conn = mysqli_connect('localhost','root','','users');
	if($conn->connect_error)
	{
		die('Conection Failed : '.$conn->connect_error);
	}
	else
	{
		$query=mysqli_query($conn,"select count(*) from users where email='$email'");
		$row=mysqli_fetch_row($query);
		$nr=$row[0];
		if($nr==0)
		{
				$query1=mysqli_query($conn,"insert into users(firstName,lastName,email,password) values('$firstName','$lastName','$email','$password')")
				or die("Inserarea nu a putut avea loc!".mysqli_error($conn));
		}
		else
		{
				return 0;

		}


	}

}
