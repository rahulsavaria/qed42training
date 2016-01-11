<?php
session_start();

$username = $_POST["user"];
$password = $_POST["pass"];

#Connect with mysql-server
$conn = mysqli_connect('localhost','root','mysql360') /*or die("FAILED TO CONNECT WITH mysql-server".mysqli_connect_error())*/;

#Verify input username and password from database
mysqli_select_db($conn,"qed42") or die('oops database selection problem ! --> '.mysqli_error());

$res=mysqli_query($conn,"SELECT * FROM user WHERE u_name='$username'");

if(!$res)
	{ echo "<script type="text/javascript">alert("Invalid username")';'</script>";} 
else 
	{
		$row=mysqli_fetch_array($res);
		if($row['u_password']==$password)
 			{
  				$user_id = $row['u_id'];
  				$_SESSION['user_id']=$user_id;
  				header("Location: records.php");

 			}
 		else
 		{ echo "<script>alert('Invalid password')';'</script>"; }
        
 	}
?> 	