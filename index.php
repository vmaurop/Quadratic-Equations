<?php
include('connections/session.php');
?>

<html>
	<head>
		<title>Εξισώσεις δευτέρου βαθμού</title>
			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">			
		
			<script type="text/javascript" src = "formjs/myFunction.js"></script>		
			<link rel="stylesheet" href="style/main.css" type="text/css" />
	</head>

	<body class="body">
		<header class="mainheader">
			
			<b><i><?php if(isset($_SESSION['login_user']))echo"Online: ", $login_session; ?></i></b>
		</header>

		<br>

		<div class="container">
		  <a href="index.php">Αρχική Σελίδα</a>
		  <a href="quadratic_equation.php">Θεωρία</a>
		  <a href="algorithm.php">Αλγόριθμος</a>
		  
			<div class="dropdown">
				<button class="dropbtn" onclick="myFunction()">Τεστ</button>
				<div class="dropdown-content" id="myDropdown">
				  <a href="Test/test1.php">Τεστ 1</a>
				  <a href="Test/test2.php">Τεστ 2</a>
				  <a href="Test/test3.php">Τεστ 3</a>
				</div>
		    </div> 	 
	      <a href="contact.php">Επικοινωνία</a>
		  
	  <div id="2">
		  <a href="log.php">Είσοδος-Εγγραφή</a>			 
	  </div>  
	  <div id="1">
		  <a href="logout.php">Έξοδος</a>		  
		  <?php 
		  if (!isset($_SESSION['login_user']))
		  {
			echo  '<script type="text/javascript">document.getElementById("1").style.display = "none" ;</script>';			
		  }
		   else
		   {
			   echo  '<script type="text/javascript">document.getElementById("2").style.display = "none" ;</script>';
		   }		   
		  ?>			  
	  </div>
		</div>

		<div class="mainContent">
			<div class="content">
				<article class="topcontent">
					<header>
						<h2>Ανάλυση Αλγορίθμου</h2>
					</header>					

					<content>
						<p> 
							Ένας βασικός αλγόριθμος που θα χρησιμοποιηθεί θα είναι αυτός τής επίλυσης εξισώσεων β βαθμού. 
							Η μέθοδος επίλυσης αφορά το τύπο της διακρίνουσας και ανάλογα το αποτέλεσμα συγκεκριμένο τυπολόγιο. 
							Στήν ενότητα Θεωρία αναφέρεται ο τρόπος επίλυσης σε θεωριτικό επίπεδο μαζί με κάποια παραδείγματα 
							Στήν ενότητα Αλγόριθμος ζητείται απο το χρήστη να εισάγει τις τιμές των παραμέτρων και στή συνέχεια
							εμφανίζεται όχι μόνο το αποτέλεσμα αλλα καί όλα τα βήματα που πρέπει να ακολουθηθούν ώστε να λυθεί 
							η εξίσωση.Ο διαδραστικός αυτός τρόπος μάθησης λύνει όλες τίς εξισώσεις αυτής της κατηγορίας(άπειρες) 
							επίσης μπορεί να χρησιμοποιηθεί για επαλήθευση οποιασδήποτε άσκησης .
						</p>										
					</content>
				</article>
			
				<article class="bottomcontent">
					<header>
						<h2>Ανάλυση Παιγνίων</h2>
					</header>

					<content>
						<p> 
							Η ανάλυση παίγνιων αφορά την ενότητα Τέστ.Έχουνε επιλεγεί 3 κατηγορίες διβαθμισμένης δυσκολίας. 
							Στήν ενότητα αυτή περιλαμβάνεται επιπλέον η παράμετρος χρόνος για το κάθε Τεστ καί τα αποτελέσματα
							αποστέλλονται με μορφή πίνακα στον υπέυθυνο για την αξιολόγηση των αποτελεσμάτων.Το πρώτο επίπεδο δυσκολίας
							αφορά τη κατανόηση του αλγόριθμου.Στό δέυτερο επίπεδο έχουμε πίο σύνθετες ασκήσεις μέσης δυσκολίας.  
							Τέλος το τρίτο επίπεδο αφορά συνδυαστικές ασκήσεις οι οποίες προυποθέτουν στοιχειώδη γνώση μαθηματικών χωρίς  
							ωστόσο να ξεπερνά το επίπεδο των μαθητών Α λυκείου.
						</p>				
					</content>
				</article>
				
				<article class="bottomcontent">
					<header>
						<h2>Ανάλυση Αποτελεσμάτων</h2>
					</header>

					<content>
						<p> 
							Σε αυτό το διαδραστικό παιχνίδι μάθησης υπάρχει η δυνατότητα εγγραφής.Ο λόγος είναι για να αποστέλλονται 
							τα αποτελέσματα σε βάση δεδομένων.Συνεπώς μπορεί να γίνεται αναζήτηση όλου τού ιστορικού τών βαθμολογιών 
							που είναι ιδιαίτερα χρήσιμο.Τέλος υπάρχει η δυνατότητα επικοινωνίας απευθείας από τη σελίδα για απορίες ή και για προτάσεις.
						</p>				
					</content>
				</article>
				
				
			</div>
		</div>
	
				<aside class="top-sidebar">
					<article>
						<h2>Βιβλιογραφία</h2>
						<h1>Άλγεβρα και Στοιχεία Πιθανοτήτων</h1>
						<p align="center"><a href="http://ebooks.edu.gr/modules/ebook/show.php/DSGL-A100/490/3186,12919/"><img align="center" src="photos/img1.jpg" width="150" height="150"></a> </p>
					</article>
				</aside>
				
				<aside class="middle-sidebar">
					<article>						
						<p  align="center"><img src="photos/math1.jpg" width="150" height="150"></p>
					</article>
				</aside>

				<aside  class="bottom-sidebar">
					<article>						
						<p  align="center"><img src="photos/logo.png" width="200" height="200"></p>
					</article>
				</aside>
				
				<footer class="mainFooter">
					<p>Copyright &copy; <a href="mailto:vmaurop@gmail@gmail.com" title="Design">TimeForGame Productions</a></p>
				</footer>
	</body>

</html>
