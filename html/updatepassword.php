<?php
session_start();
$userna=$_POST['userna'];
$mpassword=$_POST['pass'];
$passw=$_POST['pass1'];
//var_dump($_SESSION);
$genpass=$_SESSION["genpassword"];
echo $genpass;

include "../authentication.php";
if($genpass==$mpassword){
	$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql="update user set u_password='".$passw ."' where u_name='".$userna."';";
	$result=mysqli_query($conn,$sql);
	if(!$result){
		echo "nto----------";
	}
	unset($_SESSION['genpassword']);
}
