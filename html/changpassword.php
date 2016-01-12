<html>
  <head>
    <center><h1>Change Password</h1></center>
    <link rel="stylesheet" type="text/css" href="../css/changepassword.css">


    </head>
  <body>
	<form action="updatepassword.php" method="post">
		<center><div>
    <input type="text " name="userna"  class="box" placeholder="enter your username" required >
		<input type="text" name="pass" id="mpassword" class="box" placeholder="enter mailed password"  required >
		<input type="text" name="pass1" id="password" class="box" placeholder="enter your new  password" required >
		<input type="text" name="pass2" id ="repassword" class="box" placeholder="reconfirm password" required >
		<input type="submit" value ="change" id="btn" >
  </div></center>

	</form>

</body>
</hmtl>

