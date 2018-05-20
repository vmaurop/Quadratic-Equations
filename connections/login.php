<?php
//Δημιουργούμε νέα σύνδεση και έλεγχο του χρήστη εαν υπάρχει στην βάση δεδομένων μας
session_start(); // Ξεκίνα την συνεδρία
$error=''; // Μεταβλητή για αποθήκευση του μηνύματος σφάλματος

if (isset($_POST['submit'])) //εαν πατηθεί το κουμπι υποβολής φόρμας (εαν έχει ορισθεί δηλαδή)
{
	if (empty($_POST['username']) || empty($_POST['password'])) //εαν είναι άδειο το textbox username και password
	{
		$error = "Παρακαλώ καταχώρησε τον αριθμό μητρώου και τον κωδικό σου";
	}
		else
		{
			// Ορισμός $username και $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// Δημιουργία σύνδεσης με το διακομιστή περνώντας τα server_name, user_id και password σαν παραμέτρους
			$connection = mysqli_connect("localhost", "root", "1234");
			// Για προστασία του MySQL για σκοπούς ασφαλείας
			$username = stripslashes($username); //Εαν πατηθει κατα λάθος χαρακτηρες τυπου "\"
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($connection, $username); //αφαιρεί κάποιους χαρακτήρες από το string για λόγους ασφαλείας
			$password = mysqli_real_escape_string($connection, $password);
			// Επιλογή βάσης
			$db = mysqli_select_db( $connection, "phppot_examples");
			// SQL Ερώτημα για να ανακτήσουμε τις πληροφορίες των εγγεγραμμένων χρηστών και να βρούμε την αντιστοιχία χρήστη.
			$query = mysqli_query($connection, "select * from registered_users where password='$password' AND user_name='$username'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) 
			{
				$_SESSION['login_user']=$username; // Αρχικοποίηση της συνεδρίας
				header('location: index.php'); // Ανακατεύθυνση στην κεντρική σελίδα
			} 
			else 
			{
				$error = "Ο αριθμός μητρώου ή ο κωδικός είναι λανθασμένα";
			}
			mysqli_close($connection); // Κλείσιμο σύνδεσης
		}
}
?>