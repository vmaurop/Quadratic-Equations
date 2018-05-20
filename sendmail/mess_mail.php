<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
	
    } 
?>

<?php 
if(isset($_POST['submit'])){
    $to = "vmaurop@gmail.com"; // αυτη είναι η δική μου διεύθυνση mail
    $from = $_POST['mail']; // αυτή είναι του αποστολέα η διέυθυνση Email address
    $name = $_POST['name'];
    
    $subject = "Υποβολή Φόρμας";
    
    $message = "Ο " . $name . " με mail ". $from .  " Έγγραψε τα ακόλουθα: " . "\n\n" . $_POST['comment'];


   
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);

    echo "Το Mail εστάλη. Σας Ευχαριστούμε " . $name . ", Σύντομα θα επικοινωνήσουμε μαζί σας.";

    }
?>