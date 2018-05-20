<?php
include('connections/login.php'); // Να συμπεριλάβεις το login script
?>

<html>
	<head>
		<title>Login Form</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<link href="style/login_style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body >
		<div  id="main" >
			<h1 align="center"></h1>
				<div  id="login">
					<h2>Είσοδος</h2>
					<p>
					<form action="" method="post">
						<label>Αριθμός Μητρώου :</label>
						<input id="name" name="username" placeholder="username" type="text">
						<p>
						<label>Κωδικός :</label>
						<input id="password" name="password" placeholder="**********" type="password">
						<p>
						<input name="submit" type="submit" value=" Είσοδος ">
						<input name="submit" type="submit" value=" Εγγραφή " form="registerform">
						<input type="reset" value="Ακύρωση">
						<span><?php echo $error; ?></span>
					</form>
					<form action="register.php" method="post" id="registerform">
					</form>
			</div>
		</div>
	</body>
</html>