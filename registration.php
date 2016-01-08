<html>
	<head>
		<script type="text/javascript">
			function check(){
				alert("hello");
			}
		</script>
	</head>

	<body>
		<form action="registration_data.php" method ="post">
		<h1> Registration form</h1>
		<table>
			<tr>
				<td>
					Enter username:
				</td>
				<td>
					<input type ="textbox" name="username" required>
				</td>
			</tr>
			<tr>
				<td>
					Enter password:
				</td>
				<td>
					<input type ="textbox" name="password" required>
				</td>
			</tr>
			<tr>
				<td>
					Confirm password:
				</td>
				<td>
					<input type ="textbox" name="password1" required>
				</td>
			</tr>
			<tr>
				<td>
					Enter emailid :
				</td>
				<td>
					<input type ="email" name="emailid" required>
				</td>
			</tr>
			<tr>
				<td>
					Enter mobile no:
				</td>
				<td>
					<input type ="textbox" name="mobno" required >
				</td>
			</tr>
			<tr>
				
				<td colspan='2'>
					<input type ="submit"  value="register" onclick="check()">
				</td>
			</tr>
		</table>
	</form>
	</body>
</html>
			