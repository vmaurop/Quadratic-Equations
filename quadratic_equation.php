<?php
include('connections/session.php');

?>

<html>
		<head>
			<title>Θεωρία Δευτεροβάθμιας εξίσωσης</title>
				<meta charset="utf-8" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">				
				
				<link  rel="stylesheet" href="style/quad.css"/>
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
						<h1>Εξίσωση 2<sup>ου</sup> βαθμού:αχ<sup>2</sup>+bx+γ=0,α&ne;0</h1>
					</header>				

					<content>
						<p> 
						 <p>Μέθοδος επίλυσης 2<sup>ου</sup> βαθμού:αχ<sup>2</sup>+bx+γ=0,α&ne;0 (α,β,γ είναι σταθερές και x η μεταβλητή αυτό πού ψάχνουμε)</p>

							<ul type="">
							   &#9672;Προσδιορίζουμε τις τιμές των α,β και γ</br>
							   &#9672;Βρίσκουμε τη διακρίνουσα Δ=β<sup>2</sup>-4αγ</br>
							   &#9672;Διακρίνουμε περιπτώσεις:<br>
								<ul type="">
									 1.Αν Δ>0 τότε  χ<sub>1,2</sub>= (-β&plusmn;&radic;Δ)/2α,έχουμε δύο λύσεις(δύο ρίζες άνισες)<br>
									 2.Αν Δ=0 τότε χ=-β/2α,μία λύση(μία διπλή λύση)<br>
									 3.Αν Δ&lt;0 τότε η εξίσωση είναι αδύνατη δηλαδή δεν έχει λύση στό σύνολο των πραγματικών αριθμών &real;
								</ul>		   
							</ul>


							<p><b>Παράδειγμα</b></p>

							x<sup>2</sup>-x-2=0<br>

							<p><u><b>Βήμα 1</b></u></p><br>
							α=1(ο συντελεστής του x<sup>2</sup>)<br>
							β=-1(ο συντελεστής του x)<br>
							γ=-2(ο σταθερός όρος)</br>
							<br>

							<p><u><b>Βήμα 2</b></u></p><br>
							Δ=β<sup>2</sup>-4αγ=(-1)<sup>2</sup>-4*1*(-2)=1+8=9

							<br>
							<p><u><b>Βήμα 3</b></u></p><br>
							Δ>0 άρα έχουμε δύο λύσεις:χ<sub>1,2</sub>= (-β&plusmn;&radic;Δ)/2α=<br>
							=(-(-1)&plusmn;&radic;9)/2*1=(1&plusmn;3)/2<br>
							Συνεπώς χ<sub>1</sub>=(1+3)/2 και χ<sub>2</sub>=(1-3)/2 (τις διαχωρίζουμε)<br>

							χ=2 ή χ=-1<br>

							<br>
							<br>
							<p><u><b>Σχόλια</b></u></p><br>

							<ul type="disc">
								<li>x<sup>2</sup>-3=0  	&nbsp;  α=1,β=0,γ=-3   διότι μπορούμε να το γράψουμε x<sup>2</sup>+0χ-3=0 και ακολουθούμε τα βήματα
								<li>x(x-1)=3 	&nbsp; φέρουμε στη μορφή που θέλουμε x<sup>2</sup>-χ=3 &hArr; x<sup>2</sup>-χ+3=0 και keep walking...

							</ul>
						</p>							
					</content>
				</article>
			</div>
		</div>
			<footer class="mainFooter">
				<p>Copyright &copy; <a href="" title="Design">TimeForGame Productions</a></p>
			</footer>
		 
</body>
</html>
