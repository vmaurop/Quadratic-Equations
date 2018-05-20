<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
	$error='';
	$success='';
	$answer1 = null;
	$answer2 = null;
	$answer3 = null;
	$answer4 = null;
	$answer5 = null;
	
	if(isset($_SESSION['login_user']))
	{
	
	if(isset($_POST['question-1-answers']))
   {
		$answer1 = $_POST['question-1-answers'];
   }	  

	if(isset($_POST['question-2-answers']))
   {
	   $answer2 = $_POST['question-2-answers'];
   }

	if(isset($_POST['question-3-answers']))
   {
		$answer3 = $_POST['question-3-answers'];
   }
	if(isset($_POST['question-4-answers']))
   {
		 $answer4 = $_POST['question-4-answers'];
   }
	if(isset($_POST['question-5-answers']))
   {
	   $answer5 = $_POST['question-5-answers'];
   }

	   

    if(isset($_POST['submit1'])){ 
    
    $totalCorrect = 0;
    
    
    if ($answer1 == "B") { $totalCorrect++; }
    if ($answer2 == "D") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "D") { $totalCorrect++; }
    if ($answer5 == "D") { $totalCorrect++; }
    
   echo '<script type="text/javascript">alert("'.$totalCorrect.' / 5 Σωστά");</script>';
	
	
$link = mysqli_connect("localhost", "root", "123", "phppot_examples");
 
// έλεγχος σύνδεσης
if($link === false){
    die("Σφάλμα: Η σύνδεση δεν μπορεί να πραγματοποιηθεί. " . mysqli_connect_error());
}
 
// δημιουργία ερωτημάτων και πέρασμα στην βάση δεδομένων
$sql1 = "INSERT INTO scores (score,level) VALUES ('$totalCorrect','hard')";
$sql = "INSERT INTO has (register_user_name) VALUES ('" . $_SESSION["login_user"] . "')";

//$sql = "INSERT INTO score (user_name, scores, date) VALUES ('" . $_SESSION["login_user"] . "','$totalCorrect', NOW())";

if(mysqli_query($link, $sql1)){
    //echo "Records added successfully.";
   //echo '<script type="text/javascript">alert("Επιτυχης καταχωρηση δεδομένων..");</script>';
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}
if(mysqli_query($link, $sql)){
	//echo '<script type="text/javascript">alert("Επιτυχης καταχωρηση δεδομένων..");</script>';
    //echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$body = '';  // Αρχικοποίηση της μεταβλητης

$sql3 = mysqli_query($link,"SELECT *  FROM has, scores, registered_users WHERE has.id_scores=scores.id and has.register_user_name=registered_users.user_name and has.register_user_name='" . $_SESSION["login_user"] . "' ");

//ερώτημα επιλογής δεδομένων από τη βάση για να σταλούν με mail
while ($row = mysqli_fetch_assoc($sql3))
{
	 $body = '
				<html>
				<head>
					<title>Table</title>
					<style>
					table, th, td {
						border: 1px solid black;
					}
					</style>
				</head>
				<body>
					<table style="width:70%">
					<tr>
						<th>Αριθμός Μητρώου</th>
						<th>Σκορ</th> 
						<th>Όνομα</th>
						<th>Επίπεδο</th>
					</tr>
					<tr>
						<td>'. $row['register_user_name'] .'</td>
						<td>'. $row['score'] .'</td>
						<td>'. $row['first_name'] .'</td>
						<td>'. $row['level'] .'</td>
					</tr>				
				</table>
				</body>
				</html>';
}

$email = 'vmaurop@gmail.com';
$subject = 'Sending Game Statistics';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 

if (mail($email, $subject, $body, $headers)) 
{
	$success="απεσταλμένο αποτέλεσμα.";
}
else {
	$error="Η αποστολή απέτυχε...";
}
 
// κλείσιμο σύνδεσης
mysqli_close($link);

	}
}
else{
	if(isset($_POST['question-1-answers']))
   {
		$answer1 = $_POST['question-1-answers'];
   }	  

	if(isset($_POST['question-2-answers']))
   {
	   $answer2 = $_POST['question-2-answers'];
   }

	if(isset($_POST['question-3-answers']))
   {
		$answer3 = $_POST['question-3-answers'];
   }
	if(isset($_POST['question-4-answers']))
   {
		 $answer4 = $_POST['question-4-answers'];
   }
	if(isset($_POST['question-5-answers']))
   {
	   $answer5 = $_POST['question-5-answers'];
   }
	   
   if(isset($_POST['submit1'])){  
  
    
    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "B") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "D") { $totalCorrect++; }
    if ($answer5 == "C") { $totalCorrect++; }
    
   
	echo '<script type="text/javascript">alert("'.$totalCorrect.' / 5 Σωστά");</script>';
   }
}

?>

