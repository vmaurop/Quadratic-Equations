<?php
//Η συνεδρία η οποία θα κρατάει πάντα σε σύνδεση τον όποιο χρήστη (μόνο για να φαίνεται ο χρήστης στην κάθε σελίδα, τίποτα παραπάνω)

// Δημιουργία σύνδεσης με το διακομιστή περνώντας τα server_name, user_id και password σαν παραμέτρους
$connection = mysqli_connect("localhost", "root", "1234");
// Επιλέγοντας την βάση
$db = mysqli_select_db($connection,"phppot_examples");
session_start();// Έναρξη Συνεδρίας
// Αποθήκευση της Συνεδρίας
if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];
// Ερώτημα SQL για την εξαγωγή πλήρους πληροφορίας του χρήστη
$sql_query = "SELECT user_name FROM registered_users WHERE user_name='$user_check'";
$ses_sql=mysqli_query($connection, $sql_query);
$row = mysqli_fetch_assoc($ses_sql);  //Επιστρέφει(Φέρνει) το αποτέλεσμα μιας γραμμής ενώς πίνακα
$login_session =$row['user_name'];
	if(!isset($login_session)) //εαν δεν υπάρχει αποτέλεσμα στην μεταβλητη login_session
	{
		mysqli_close($connection); // Κλείσε τη σύνδεση
		header('Location: index.php'); // ανακατέυθυνση στην αρχικη σελίδα
	}
}
else{}
?>