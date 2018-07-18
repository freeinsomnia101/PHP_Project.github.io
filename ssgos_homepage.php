<?php

	echo "<!DOCTYPE html>";

	echo "<html>";

		echo "<head>";
	
			echo "<title>Smith Safety Gear Online Store_Homepage</title>";
			
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
			
			echo "<style>";
			
				echo "input[type=submit] {";
						echo "width: 34%;";
						echo "background-color: #4CAF50;";
						echo "color: white;";
						echo "padding: 14px 20px;";
						echo "margin: 8px 0;";
						echo "border: none;";
						echo "border-radius: 4px;";
						echo "cursor: pointer;";
						
			    echo "body { background-color: #EEEEEE; }";
			
			echo "</style>";
	
	    echo "</head>";
	
		echo "<body>";
		
			include "ssgos_header.html";
			
			echo "<br><br><br><br>";
			
			echo "<div align=\"center\" style=\"background-color: #E0E0E0\">";
			
				echo "<h1> &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 Store &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295 &#128296 &#128295</h1>";
			
			echo "</div>";
			
			echo "<div>";

				echo "<img style=\"padding-left: 60px;\" src=\"picture/headprotection.jpg\" alt=\"head protection\" height=\"300px\" width=\"300px\"></img>";
				
				echo "<img style=\"padding-left: 60px;\" src=\"picture/bodyprotection.jpg\" alt=\"body protection\" height=\"300px\" width=\"300px\"></img>";
				
				echo "<img style=\"padding-left: 60px;\" src=\"picture/handprotection.jpg\" alt=\"hand protection\" height=\"300px\" width=\"300px\"></img>";
		
				echo "<img style=\"padding-left: 60px;\" src=\"picture/gasmask.jpg\" alt=\"gas mask\" height=\"300px\" width=\"300px\"></img>";

			echo "</div>";
			
			echo "<br><b style=\"padding-left: 140px\">1. head protection</b>";
				
			echo "<b style=\"padding-left: 240px\"\>2. body protection</b>";
				
			echo "<b style=\"padding-left: 250px\"\>3. hand protection</b>";
				
			echo "<b style=\"padding-left: 250px\"\>4. gas mask</b>";
			
			echo "<br><br><b style=\"padding-left: 120px\">Safety equipment for head</b>";
			
			echo "<b style=\"padding-left: 150px\">Safety equipment for upper body</b>";
			
			echo "<b style=\"padding-left: 170px\">Safety equipment for hands</b>";
			
			echo "<b style=\"padding-left: 120px\">Safety equipment for respiratory system</b>";
			
			echo "<br><br><b style=\"padding-left: 120px\">Cost(RM/per item): 16.00</b>";
			
			echo "<b style=\"padding-left: 180px\">Cost(RM/per item): 18.90</b>";
			
			echo "<b style=\"padding-left: 200px\">Cost(RM/per item): 20.80</b>";
			
			echo "<b style=\"padding-left: 190px\"	>Cost(RM/per item): 40.90</b>";
			
			echo "<form action=\"ssgos_shoppingcart.php\" method=\"post\">";
			
				echo "<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"number\" name=\"headprotection\" placeholder=\"Enter the quantity here\">";
				
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"number\" name=\"bodyprotection\" placeholder=\"Enter the quantity here\">";
				
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"number\" name=\"handprotection\" placeholder=\"Enter the quantity here\">";
				
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"number\" name=\"gasmask\" placeholder=\"Enter the quantity here\">";
				
				echo "<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				echo "<input type=\"submit\" name=\"submit\">";
			
			echo "</form>";
			
			include "ssgos_footer.html";
	
	    echo "</body>";
	
    echo "</html>";
	
?>