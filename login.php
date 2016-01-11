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

$sql="SELECT u_password FROM user WHERE u_name='".$uname."';";


$res=mysqli_query($con,$sql);
$row=mysqli_fetch_row($res);


 		if($row[0]==$password1)
 			{

   				$user_id = $row['u_id'];
   				$_SESSION['user_id']=$user_id;


   				header("Location: http://localhost/qed42training/html/records.php");

  			}
  		else
  		{ echo "<script>alert('Invalid password')';'</script>";

  	}
?>
