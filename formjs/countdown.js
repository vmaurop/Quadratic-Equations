  //Javascript με jquery (Συνάρτηση επιλογής του χρόνου που θέλουμε)
    $(function()
	{
      // Επιλέγουμε το συμβάν 
      $('#mySelect').on('change', function () 
	  {
          var url = $(this).val(); // επιλέγουμε το value κάθε αντικειμένου
          if (url) 
		  { 
              time() = url; // επαναδιέυθυνση στον χρόνο που θέλουμε 
          }
          return false;
      });
    })





var intervalId = null;

function startTimer(duration, display)  //Συνάρτηση με την οποια κατασκευάζουμε το ρολοι
{
    var timer = duration, minutes, seconds;
     intervalId = setInterval(function () 
	{
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

		if(minutes < 10)
		{
			minutes = "0" + minutes;
		}
		
		if(seconds < 10)
		{
			seconds = "0" + seconds;
		}
      
		// display.textContent = minutes + ":" + seconds;
		
		// Το ρολόι θα εμφανίζεται στην παράγραφο με id "demo" 
		document.getElementById("demo").innerHTML = minutes + ":" + seconds;

		//Αν ο χρόνος πάει αρνητικός τότε μηδένισε το ρολόι
        if (--timer < 0) 
		{
            timer = duration;
			clearInterval(intervalId);
			
        }
		
		//Αν το ρολοι πάει στο 0
		if (minutes == 00 && seconds == 00)
		{
			//document.location.reload(true);
			
			alert("Ο χρόνος σου έληξε, Προσπάθησε ξανά");
		    document.getElementById('submit1').click();	  //Φόρτωσε τα αποτελέσματα που υπάρχουν ήδη στη βάση		
		}
		
    }, 1000);
}



//συνάρτηση με την οποία κατασκευάζουμε τα ορίσματα για την συνάρτηση startTimer(), τα ορίσματα είναι ο χρόνος και η εμφάνιση του χρόνου
function time () 
{
	if(document.querySelector('#myselect').value=="60:00")
	{
		clearInterval(intervalId);
		var sixtyMinutes = 60 * 60,
        display = document.querySelector('#time5');
		startTimer(sixtyMinutes, display);
	}
	else if(document.querySelector('#mySelect').value=="40:00") 
	{
		clearInterval(intervalId);
		var fourtyminutes = 60 * 40,
        display= document.querySelector('#time4');
		startTimer(fourtyminutes, display);
	}
	else if(document.querySelector('#mySelect').value=="20:00") 
	{
		clearInterval(intervalId);
		var twentyminutes = 60 * 20,
        display= document.querySelector('#time2');
		startTimer(twentyminutes, display);
	}
	else 
	{
		clearInterval(intervalId);
		var tenminutes = 60 * 10,
        display= document.querySelector('#time1');
		startTimer(tenminutes, display);
	}
};

;


