     
	 
	 
	  
	<?php $hours=date("H"); $minutes=date("i"); 
		echo "<h1>Sati i minute u danu</h1> <p>Sada je " . $hours . " sati i " . $minutes . " minuta</p>";
       if ($hours >= 20) { echo "<p>Laku noć.</p>"; } 
       else if ($hours >=8 && $hours <= 11) { echo "<p>Dobro jutro</p>."; } 
       else { echo "<p>Dobar dan.</p>"; }
     ?>