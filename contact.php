<?php
include('connections/session.php');

?>
<html>

	<head>
		<title>Επικοινωνία</title>
			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
		
			<script type="text/javascript" src = "formjs/myFunction.js"></script>		
			<link rel="stylesheet" href="style/contact.css" type="text/css" />
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
						<h2>Επικοινωνία</a></h2>
					</header>
					<content>
						<p> 
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								  <fieldset>
										<legend>Στοιχεία Επικοινωνίας</legend>
										Email<br>
										<input type="text" name="mail">
										<br>
										Ονοματεπώνυμο<br>
										<input type="text" name="name">
										<br>
										Σχόλια<br> 
										<textarea name="comment" rows="5" cols="40"></textarea>
										<br><br>
										<input type="submit" name="submit" value="Υποβολή">
								  </fieldset>
							</form></p>
							<?php
							include 'sendmail/mess_mail.php';
							?>
					</content>
				</article>
			</div>
		</div>	
				<footer class="mainFooter">
					<p>Copyright &copy; <a href="" title="Design">TimeForGame Productions</a></p>
				</footer>		
	</body>
</html>