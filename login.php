<?php
session_start();

$uname = $_POST["user"];
$password1 = $_POST["pass"];



include "authentication.php";
 $con = mysqli_connect($servername, $username, $password, $dbname);
 if (!$con)
    {
       die("Connection failed: " . mysqli_connect_error());
    }

$sql="SELECT u_password,u_id FROM user WHERE u_name='".$uname."';";


$res=mysqli_query($con,$sql);
$row=mysqli_fetch_row($res);


 		if($row[0]==$password1)
 			{

   				$user_id = $row[1];
   				$_SESSION['user_id']=$user_id;


   				header("Location: http://localhost/qed42training/html/records.php");

  			}
  		else
  		{
          echo" <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>" ;
          echo "<script type='text/javascript'>alert('username or password is incorrect');</script>";
         echo "<script type='text/javascript'>window.location='http://localhost/qed42training/html/login.html');</script>";
  	}
?>
