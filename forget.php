<?php

$email=$_POST['emailid'];

$randpassword= substr(md5(uniqid(mt_rand(), true)), 0, 8);
session_start();
$_SESSION['genpassword']=$randpassword;
echo $_SESSION['genpassword'];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' ; 
$url="http://localhost/qed42training/changepassword.php";
$msg="this is your new password---".$randpassword."click on the given link --".$url; //<a href='localhost/forget.html'>here</a>";
$msg = wordwrap($msg,70);
mail($email,"My subject",$msg,$headers);
var_dump($_SESSION);
?>