<?php
if(!empty($_POST["register-user"])) 
{
	/* Απαιτείται επιβεβαίωση πεδίου φόρμας */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "Απαιτούνται όλα τα πεδία";
		break;
		}
	}
	/* Επικύρωση κωδικού πρόσβασης με κωδικό πρόσβασης */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Οι κωδικοί δεν ταιριάζουν<br>'; 
	}

	
	if(!isset($error_message)) //εαν δεν εχει τιμη η μεταβλητη error
	{
		/* Επικύρωση Email */
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Λανθασμένη διεύθυνση Email";
		}
		
		
		
		
		/* Επικύρωση Τηλεφώνου */
		if(!is_numeric($_POST["phone"]))
		{
			$error_message = "Το τηλέφωνο θα πρέπει να περιέχει μόνο αριθμούς";
		}	
		
		
		if(strlen($_POST["phone"])!==10)
			 {
				 $error_message = "Τα ψηφία του αριθμού τηλεφώνου θα πρέπει να είναι 10";
			 }
	}
	
	
	
	
	/* Πρόσθεσε τις τιμές στην βάση με ερώτημα   */
	if(!isset($error_message)) 
	{
		require_once("connections/dbcontroller_register.php");
		$db_handle = new DBController();     //δημιουργια αντικειμένου της κλάσσης DBController
			
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, occupation, phone) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["password"] . "', '" . $_POST["userEmail"] . "', '" . $_POST["occupation"] . "' , '" . $_POST["phone"] . "')";
		$result = $db_handle->insertQuery($query);  //αντικείμενο της κλάσης το οποίο καλεί την συνάρτηση αυτής και αποθηκεύει tο αποτέλεσμα στην result
		
		
		if(!empty($result)) {
			$error_message = "";
			$success_message = "Η εγγραφή σου ολοκληρώθηκε επιτυχώς!";	
			unset($_POST);			//διαγραφή όλων των πεδίων
		} else {
			$error_message = "Αυτή η εγγραφή υπάρχει ήδη. Προσπάθησε ξανά!";	
		}		

	}	
}
?>
<html>
	<head>
		<title>Registration Form</title>
		<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				
				
				<link href="style/register_style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<form id="loginform" method="post" action="log.php"></form>

		<form name="frmRegistration" method="post" action="">

			<table align="center" class="demo-table">

				<?php if(!empty($success_message)) { ?>	
				<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
				<?php } ?>

				<?php if(!empty($error_message)) { ?>	
				<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
				<?php } ?>

				<tr>
					<td>Αριθμός Μητρώου</td>
					<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
				</tr>

				<tr>
					<td>Όνομα</td>
					<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
				</tr>

				<tr>
					<td>Επώνυμο</td>
					<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
				</tr>

				<tr>
					<td>Κωδικός</td>
					<td><input type="password" class="demoInputBox" name="password" value=""></td>
				</tr>

				<tr>
					<td>Επιβεβαίωση Κωδικού</td>
					<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
				</tr>

				<tr>
					<td>Ιδιότητα</td>
					<td><input type="text" class="demoInputBox" name="occupation" value="<?php if(isset($_POST['occupation'])) echo $_POST['occupation']; ?>"></td>
				</tr>

				<tr>
					<td>Αριθμός Τηλεφώνου</td>
					<td><input type="text" class="demoInputBox" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"></td>
				</tr>

				<tr>
					<td align="right"><input type="submit" name="register-user" value="Εγγραφή" class="btnRegister"></td>
					<td align="right"><input type="submit" name="submit" value="Είσοδος" class="btnRegister" form="loginform"></td>
				</tr>
				
			</table>
		</form>
	</body>
</html>