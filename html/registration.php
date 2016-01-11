<?php


$u_name=$_POST['name'];
$u_username=$_POST['username'];
$u_password=$_POST['password'];
$u_emailid=$_POST['emailid'];
$u_phoneno=$_POST['mobno'];
$fpass="";
$pass=str_split($u_password);
for($i=0 ;$i<strlen($u_password);$i++)
{
   $fpass = $fpass.ord($pass[$i]);
}



$servername  = "localhost";
$username = "root";
$password = "root";
$dbname = "drupal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (u_name,u_password,u_email,u_mobile)
VALUES ('$u_username','$fpass','$u_emailid','$u_phoneno')";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('Registration successful')</script>";
     header("Location:http://localhost/qed42training/html/records.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
