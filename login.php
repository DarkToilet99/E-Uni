<?php

$email = $_POST["email"];
$password = $_POST["password"];
$conn = mysqli_connect('localhost','root','','users');
if($conn->connect_error)
{
  die('Conection Failed : '.$conn->connect_error);
}
else
{

  $query=mysqli_query($conn,"select count(*) from users where email= '$email'");
  $row=mysqli_fetch_row($query);
  $nr=$row[0];
  if($nr==0)
  {
      echo"<center>";
      echo "Email-ul exista deja in baza de date!";
      echo"</center>";
  }
  else
  {
    $emailDB="";
    $passDB="";
    $query2=mysqli_query($conn,"select email,password from users where email = '$email'");

    $row1 = mysqli_fetch_array($query2);
	
    if($email == $row1["email"] && $row1["password"] == hash ("whirlpool" , $password))
    {
      echo "Login Success";
    }
    else {
      echo "Username or password wrong";
    }

  }
}
