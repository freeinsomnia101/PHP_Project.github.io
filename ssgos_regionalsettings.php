<?php

	if ( isset($_POST['submit']) ) {
		
		setcookie("country", $_POST['country']);
		setcookie("language", $_POST['language']);
		setcookie("currency", $_POST['currency']);
		
		header('Location: ssgos_homepage.php');
		
	} else {

		echo "<html>";
	
			echo "<head>";
		
				echo "<title>Smith Safety Gear Online Store_Regional Settings</title>";
				
				echo "<style>";
			
					echo "body { background-color: #EEEEEE; }";
					
					echo "input[type=submit] {";
								echo "width: 34%;";
								echo "background-color: #4CAF50;";
								echo "color: white;";
								echo "padding: 14px 20px;";
								echo "margin: 8px 0;";
								echo "border: none;";
								echo "border-radius: 4px;";
								echo "cursor: pointer;";
							echo "}";
			
			    echo "</style>";
	
			echo "</head>";
	
			echo "<body>";
		
				include "ssgos_header.html";
		
				echo "<div align=\"center\" style=\"background-color: #e0e0e0\">";
			
					echo "<h1>&#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 Regional Settings &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699 &#x2699</h1>";
			
				echo "</div>";
			
				echo "<div align=\"center\" style=\"background-color: #eeeeee; padding-top: 10px\"><b>";
			
				echo "<form action=\"ssgos_regionalsettings.php\" method=\"post\">";
			
				echo "<h2>Choose your preference</h2>";
	
					echo "<br>Country:";
				
					echo "<select name=\"country\">";
				
						echo "<option value=\"Malaysia\">Malaysia</option>";
						echo "<option value=\"United State\">United State</option>";
						echo "<option value=\"Singapore\">Singapore</option>";
					
					echo "</select>";	
				
					echo "<br><br><br>Language:";
				
					echo "<select name=\"language\">";
				
						echo "<option value=\"Bahasa Melayu\">Bahasa Melayu</option>";
						echo "<option value=\"English\">English</option>";
						echo "<option value=\"中文\">中文(simplified)</option>";
					
					echo "</select>";	
				
					echo "<br><br><br>Currency:";
				
					echo "<select name=\"currency\">";
				
						echo "<option value=\"RM\">RM</option>";
						echo "<option value=\"USD\">USD</option>";
						echo "<option value=\"SGD\">SGD</option>";
					
					echo "</select><br><br>";	
				
					echo "<input type=\"submit\" name=\"submit\" value=\"Yup, that's my preffered settings\">";
				
					echo "</form><br>";
				
					echo "<img src=\"picture/rs1.jpg\" alt=\"Malaysia\" width=\"400px\" height=\"200px\">";
					echo "<img src=\"picture/rs2.jpg\" alt=\"Singapore\" width=\"400px\" height=\"200px\">";
					echo "<img src=\"picture/rs3.jpg\" alt=\"United State\" width=\"400px\" height=\"200px\">";
					
				echo "</b></div>";
			
				include "ssgos_footer.html";
		
			echo "</body>";
	
		echo "</html>";
		
	}

?>