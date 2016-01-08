<?php
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$emailid=$_POST['emailid'];
	$phoneno=$_POST['mobno'];
	
	$user="root";
	echo $user;
	//die();
	$password="ankur0326";
	$link = mysqli_connect('localhost', $user, $password);
	if (!$link) {
    	die('Could not connect: ');
    }
    mysqli_select_db($link,'qed42');
    $sql=("insert into user values(DEFAULT,'$name','$username','$password','$emailid','$phoneno'); ");
    echo $sql;
    
    if(mysqli_query($link,$sql)){
    	echo "done.......!!!!!!";
    	echo "".$sql;
    }
    else{
    	echo "some problem".$sql;
    }
ECHO "JELLO";
    header("Location:http://localhost/qedtraining/record.php");
ECHO "HELLO";
    mysqli_close($link);
 ?>