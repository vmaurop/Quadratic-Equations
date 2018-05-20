<?php
include('../connections/session.php');
?>


<html>
	<head>
		<title>Test3</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		
		<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>	
				
		<script type="text/javascript" src = "../formjs/countdown.js"></script>
		<script type="text/javascript" src = "../formjs/myFunction.js"></script>
		
		<link  rel="stylesheet" href="../style/tests.css"/>
	</head>
	
	<body class="body">
		<header class="mainheader">
			
			<b><i><?php if(isset($_SESSION['login_user']))echo"Online: ", $login_session; ?></i></b>
		</header>

		<br>

		<div class="container">
		  <a href="../index.php">Αρχική Σελίδα</a>
		  <a href="../quadratic_equation.php">Θεωρία</a>
		  <a href="../algorithm.php">Αλγόριθμος</a>
		  
			<div class="dropdown">
				<button class="dropbtn" onclick="myFunction()">Τεστ</button>
				<div class="dropdown-content" id="myDropdown">
				  <a href="../Test/test1.php">Τεστ 1</a>
				  <a href="../Test/test2.php">Τεστ 2</a>
				  <a href="../Test/test3.php">Τεστ 3</a>
				</div>
		    </div> 	 
	      <a href="../contact.php">Επικοινωνία</a>
		  <div id="2">
		  <a href="../log.php">Είσοδος-Εγγραφή</a>			 
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
						<h2>3<sup>o</sup>Τεστ</a></h2>
					</header>

					<content>
						<p>	<!-- Με το πάτημα του κουμπιού θα φορτώσει η grade1.php αλλα θα παραμείνουμε στην ίδια φόρμα -->
						<form method="post" id="solve" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

							<select id="mySelect" onchange="myFunction()">
							  <option value="" selected>Διάλεξε τον χρόνο σου</option>
							  <option value="60:00" id="time5">60 Λεπτά
							  <option value="40:00" id="time4">40 Λεπτά
							  <option value="20:00" id="time2">20 Λεπτά
							  <option value="10:00" id="time1">10 Λεπτά
							</select>
																				
							<p id="demo"></p>

							<p><div class="random_button5"> </P>
									  <b>Η εξίσωση x<sup>2</sup>+χ+λ<sup>2</sup>+1=0</b>
									   
										<div class="random_button">
											<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
											<label for="question-1-answers-A">Αν λ=0 έχει λύση</label>
										</div>
										
										<div class="random_button">
											<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
											<label for="question-1-answers-B">Είναι αδύνατη για κάθε λ&#x220A;&real;</label>
										</div>
										
										<div class="random_button">
											<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
											<label for="question-1-answers-C">Μοναδική λύση x =λ</label>
										</div>
										
										<div class="random_button">
											<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
											<label for="question-1-answers-D">x=2λ ή x=-λ</label>
										</div>
								</div>		
									
								<p><div class="random_button5"> </P>		
									   <b>Άν Α=-10z<sup>2</sup>+3z+1 και Β=15z<sup>2</sup>-7z+2 η λύση της εξίσωσης Α=B</b>
									   
									   <div class="random_button1">
											<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
											<label for="question-2-answers-A">z=1.2 ή z=1.7</label>
										</div>
										
										<div class="random_button1">
											<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
											<label for="question-2-answers-B">z=0</label>
										</div>
										
										<div class="random_button1">
											<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
											<label for="question-2-answers-C">z=&plusmn;1/2</label>
										</div>
										
										<div class="random_button1">
											<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
											<label for="question-2-answers-D">z=1/5 μοναδική λύση</label>
										</div>
								</div>		
										
								
									 
								<p><div class="random_button5"> </P>	 
									   <b>Για ποιές τιμές του α&#x220A;&real; η εξίσωση x<sup>2</sup>-&radic;3x+α=0 έχει 2 λύσεις</b>
										<div class="random_button2">
											<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
											<label for="question-3-answers-A">Για α&ge;0</label>
										</div>
										
										<div class="random_button2">
											<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
											<label for="question-3-answers-B">Μόνο για α=1  </label>
										</div>
										
										<div class="random_button2">
											<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
											<label for="question-3-answers-C">Για κάθε α&#x220A;&real;</label>
										</div>
										
										<div class="random_button2">
											<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
											<label for="question-3-answers-D">Για α &lt; 3/4</label>
										</div>
								</div>		
									   
								<p><div class="random_button5"> </P>	
									   <b>Έαν λ,μ είναι οι λύσεις τής εξίσωσης z<sup>2</sup>-4z+3=0 να υπολογίσετε τη τιμή της παράστασης Α=λ<sup>2</sup>+μ<sup>2</sup></b>
										<div class="random_button3">
											<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
											<label for="question-4-answers-A">A=9 </label>
										</div>
										
										<div class="random_button3">
											<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
											<label for="question-4-answers-B">A=16</label>
										</div>
										
										<div class="random_button3">
											<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
											<label for="question-4-answers-C">A=&plusmn;&radic;37</label>
										</div>
										
										<div class="random_button3">
											<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
											<label for="question-4-answers-D">A=10</label>
										</div>
								</div>		
										
							    <p><div class="random_button5"> </P>									 
									   <b>Αν μ,ν οι λύσεις της εξίσωσης  αx<sup>2</sup>+βχ+γ=0,α&ne;0 να υπολογίσετε Γ=μ<sup>2</sup>+ν<sup>2</sup></b>
									   <div class="random_button4">
											<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
											<label for="question-5-answers-A">Δέν ορίζεται διότι μπορεί β=0</label>
										</div>
										
										<div class="random_button4">
											<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
											<label for="question-5-answers-B">Γ=&radic;γ/α</label>
										</div>
										
										<div class="random_button4">
											<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
											<label for="question-5-answers-C">Γ=-&radic;Δ/2α, όπου Δ=β<sup>2</sup>-4αγ</label>
										</div>
										
										<div class="random_button4">
											<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
											<label for="question-5-answers-D">Γ=(β<sup>2</sup>-2αγ)/α<sup>2</sup></label>
										</div>
								</div>		
									   <script type="text/javascript" src = "../formjs/rad.js"></script>
									<br>
									<input type="submit" name="submit1" id="submit1"  value="Υποβολή Τέστ"  />
									<input type="reset" value="Επαναφορά" />

									</form>
											<?php
											include 'grade3.php';    //Συμπεριέλαβε το αρχείο που θα φορτωθεί
											?> </p>	
												<span><?php echo $success; ?></span>
												<span1><?php echo $error; ?></span1>
					</content>
				</article>
			</div>
		</div>
		
				<footer class="mainFooter">
					<p>Copyright &copy; <a href="" title="Design">TimeForGame Productions</a></p>
				</footer>
	</body>
</html>
