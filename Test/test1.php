<?php
include('../connections/session.php');
?>


<html>
	<head>
		<title>Test1</title>
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
			
			<b><i><?php if(isset($_SESSION['login_user']))echo"Online : ", $login_session; ?></i></b>
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
		  <a href="../logout.php">Έξοδος</a>		  
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
						<h2>1<sup>o</sup>Τεστ</a></h2>
					</header>
					
					<content>
						<p>			<!-- Με το πάτημα του κουμπιού θα φορτώσει η grade1.php αλλα θα παραμείνουμε στην ίδια φόρμα -->
						<form name="myForm" id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
						
							<select id="mySelect" onchange="myFunction()">
							  <option value="" selected>Διάλεξε τον χρόνο σου</option>
							  <option value="60:00" id="time5">60 Λεπτά
							  <option value="40:00" id="time4">40 Λεπτά
							  <option value="20:00" id="time2">20 Λεπτά
							  <option value="10:00" id="time1">10 Λεπτά
							</select>
																				
							<p id="demo"></p>

							<p><div class="random_button5"></p>
							  <b>Η εξίσωση 3χ<sup>2</sup>+2x+1=0 έχει Διακρίνουσα</b>							 
							
								<div class="random_button">
									<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
									<label for="question-1-answers-A">-8 </label>
								</div>
								
								<div class="random_button">
									<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
									<label for="question-1-answers-B">16</label>
								</div>
								
								<div class="random_button">
									<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
									<label for="question-1-answers-C">1</label>
								</div>
								
								<div class="random_button">
									<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
									<label for="question-1-answers-D">Τίποτα από τα παραπάνω</label>
								</div>
							</div> 
								
							
							
							 <p><div class="random_button5"> </P>
							  <b>Η Διακρίνουσα της εξίσωσης α<sup>2</sup>-9=0 είναι</b>							   
							  
							   <div class="random_button1">
									<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
									<label for="question-2-answers-A">Δέν ορίζεται </label>
								</div>
								
								<div class="random_button1">
									<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
									<label for="question-2-answers-B">36</label>
								</div>
								
								<div class="random_button1">
									<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
									<label for="question-2-answers-C">-9</label>
								</div>
								
								<div class="random_button1">
									<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
									<label for="question-2-answers-D">3</label>
								</div>
							</div>	
								
							
							 
							 <p><div class="random_button5"></P>							
							  <b>Οι λύσεις της εξίσωσης β<sup>2</sup>-4β+3=0</b>							   
							   
								<div class="random_button2">
									<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
									<label for="question-3-answers-A">β=2 ή β =1</label>
								</div>
								
								<div class="random_button2">
									<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
									<label for="question-3-answers-B">Είναι αδύνατη στό σύνολο των πραγματικών αριθμών</label>
								</div>
								
								<div class="random_button2">
									<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
									<label for="question-3-answers-C">Μία διπλή λύση β=2</label>
								</div>
								
								<div class="random_button2">
									<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
									<label for="question-3-answers-D">β=3 ή β=1</label>
								</div>
							</div>	
							   
							
							
							<p><div class="random_button5"></p>
							   <b>Οι λύσεις της εξίσωσης 4λ<sup>2</sup>+3λ-27=0</b>
							   
							
								<div class="random_button3">
									<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
									<label for="question-4-answers-A">λ=-1 ή λ=0</label>
								</div>
								
								<div class="random_button3">
									<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
									<label for="question-4-answers-B">λ=0 μοναδική λύση</label>
								</div>
								
								<div class="random_button3">
									<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
									<label for="question-4-answers-C">λ=3/2 ή λ=1/2</label>
								</div>
								
								<div class="random_button3">
									<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
									<label for="question-4-answers-D">λ=2.25 ή λ=-3</label>
								</div>
							</div>	
								
							
							 
							<p><div class="random_button5"> </p>							
							   <b>Το -3 αποτελεί λύση της εξίσωσης</b> 							   
							  
							   <div class="random_button4">
									<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
									<label for="question-5-answers-A">χ<sup>2</sup>+3=0</label>
								</div>
								
								<div class="random_button4">
									<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
									<label for="question-5-answers-B">x<sup>2</sup>-2x+1=0</label>
								</div>
								
								<div class="random_button4">
									<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
									<label for="question-5-answers-C">x<sup>2</sup>+2x-3=0</label>
								</div>
								
								<div class="random_button4">
									<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
									<label for="question-5-answers-D">Είναι αδύνατο διότι ειναι αρνητικός αριθμός</label>
								</div>
							</div>  
							
							<script type="text/javascript" src = "../formjs/rad.js"></script>
																						
							   
							<br>
							<input type="submit" name="submit1" id="submit1"  value="Υποβολή Τέστ"  />
							<input type="reset" value="Επαναφορά" />
							

							</form>
									<?php
									include 'grade1.php';   //Συμπεριέλαβε το αρχείο που θα φορτωθεί
									?>
										<span><?php echo $success; ?></span>
										<span1><?php echo $error; ?></span1>
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
