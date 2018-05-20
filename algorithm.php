<?php
include('connections/session.php');
?>

<html>
	<head>
	<title>Αλγόριθμος</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<link  rel="stylesheet" href="style/algorithm.css"/>
		<script type="text/javascript" src = "formjs/myFunction.js"></script>
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
						<h2>Επίλυση εξισώσεων δευτέρου βαθμού</h2>
					</header>
					<content>
						<p> 
						<br>	
							<form method="post" id="solve" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
								<input type="text" name="a" size ="2">χ<sup>2</sup>+<input type="text" name="b" size="2">x+<input type="text" name="c" size = "2">=0,α&ne;0 <br>
								<br>
								<br>
								<input type="image" src="photos/go2.png" alt="Submit" width="48" height="48" >
							</form> 
			
								<?php
									include 'Functions/quadratic_square.php';
								?></p>				
					</content>
				</article>
			</div>
		</div>	

			<footer class="mainFooter">
				<p>Copyright &copy; <a href="" title="Design">TimeForGame Productions</a></p>
			</footer>
	</body>
</html>