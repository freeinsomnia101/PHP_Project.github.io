<?php
	
		if ( isset($_POST['submit']) ) {
		
			$count = 0;
			
			echo "<html>";
	
				echo "<head>";
		
					echo "<title>Smith Safety Gear Online Store_Contact us</title>";
			
					echo "<style>";
			
						echo "body { background-color: #EEEEEE; }";
			
					echo "</style>";
		
				echo "</head>";
		
				echo "<body>";
		
					include "ssgos_header.html";
		
					echo "<div style=\"background-color: #EEEEEE; padding-top: 120px\">";
	
					if ( !empty($_POST['UserName']) && is_string($_POST['UserName']) ) {		
			
						++$count;
		
					} else 
						echo "<p align=\"center\"><font size=\"10\"><b>Invalid user's full name</b></font></p><br><br>";
						
					if ( !empty($_POST['UserPhoneNumber']) && is_numeric($_POST['UserPhoneNumber']) ) {
		
						++$count;
			
					} else 		
						echo "<p align=\"center\"><font size=\"10\"><b>Invalid user's phone number</b></font></p><br><br>";
				
					if ( !empty($_POST['UserEmailAddress']) && is_string($_POST['UserEmailAddress']) ) {
		
						++$count;
			
					} else 			
						echo "<p align=\"center\"><font size=\"10\"><b>Invalid user's email address</b></font></p><br><br>";
					
					if ( !empty($_POST['UserThought']) && is_string($_POST['UserThought']) ) {
		
						++$count;
		
					} else
						echo "<p align=\"center\"><font size=\"10\"><b>Invalid user's message</b></font></p><br><br><br>";
						
					if ( $count == 4 ) {
			        
						if($connect = mysqli_connect('localhost', 'root', '')) {
						if(mysqli_select_db($connect, 'ssgos')) {
						
							$UserName = trim($_POST['UserName']);
							$UserPhoneNumber = trim($_POST['UserPhoneNumber']);
							$UserEmailAddress = trim($_POST['UserEmailAddress']);
							$UserMessage = trim($_POST['UserThought']);
				
							$query = "INSERT INTO contactus (username, phoneNumber, email, message) VALUES ('{$UserName}', '{$UserPhoneNumber}', '{$UserEmailAddress}', '{$UserMessage}' )";
				
							if(mysqli_query($connect, $query)) {
							
								echo "";
							
							} else {
							
								echo "Connection to table contactus result in failure.";
						
							}
				
						} else {
						
							echo '<p>Connection to database ssgos failed.</p>';
						
							}
			
						} else {
						
							echo '<p>'. mysqli_connect_error($connect) .'</p>';
			
							}
						
						mysqli_close($connect);
						
						echo "<style>input[type=submit] {";
							echo "width: 34%;";
							echo "background-color: #4CAF50;";
							echo "color: white;";
							echo "padding: 14px 20px;";
							echo "margin: 8px 0;";
							echo "border: none;";
							echo "border-radius: 4px;";
							echo "cursor: pointer;";
						echo "}</style>";
						
						echo "<br><br><br>";
						echo "<h1 style=\" padding: 50px; font-size: 60px; text-align: center; color: #FFD500; border-style: solid;";
						echo "border-color: #A2A2A2; border-width: 7px; margin: 10px;\">We have successfully received your message. Thanks, $UserName!!! &#x263A";
						echo "<form action=\"ssgos_homepage.php\" method=\"post\"><br>";
						echo "<input type=\"submit\" name=\"submit\" value=\"I want to keep shopping, take me back to home page\"></h1>";
									
					} else {
	
						echo "<div align=\"center\"><a href=\"ssgos_contactus.php\"><font size=\"15\">";
						echo "<b style=\"padding: 20px; border-style: solid; border-width: 5px; border-color: red;\">Click this to go back to contact us page</b></font></a></div>";
		
					}
		
					include "ssgos_footer.html"; 
		
				echo "</body>";
			
			echo "</html>";
							
	} else {
		
		echo "<html>";

			echo "<head>";
	
				echo "<title>Smith Safety Gear Online Store_Contact us page</title>";
	
				echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
		
				echo "<style>";
		
					echo "input[type=string], select {";
						echo "width: 34%;";
						echo "padding: 12px 20px;";
						echo "margin: 8px 0;";
						echo "display: incline-blick;";
						echo "border: 1px solid #ccc;";
						echo "border-radius: 4px;";
						echo "box-sizing: border-box;";
					echo "}";
		
					echo "input[type=number], select {";
						echo "width: 34%;";
						echo "padding: 12px 20px;";
						echo "margin: 8px 0;";
						echo "display: incline-blick;";
						echo "border: 1px solid #ccc;";
						echo "border-radius: 4px;";
						echo "box-sizing: border-box;";
					echo "}";

					echo "textarea {";
						echo "width: 34%;";
						echo "padding: 12px 20px;";
						echo "margin: 8px 0;";
						echo "display: incline-blick;";
						echo "border: 1px solid #ccc;";
						echo "border-radius: 4px;";
						echo "box-sizing: border-box;";
					echo "}";
		
					echo "input[type=character], select {";
						echo "width: 34%;";
						echo "padding: 12px 20px;";
						echo "margin: 8px 0;";
						echo "display: incline-blick;";
						echo "border: 1px solid #ccc;";
						echo "border-radius: 4px;";
						echo "box-sizing: border-box;";
					echo "}";
			
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
					
					echo "body { background-color: #EEEEEE; }";
		
				echo "</style>";
	
			echo "</head>";
	
			echo "<body>";
	
				include "ssgos_header.html";
	
				echo "<form action=\"ssgos_contactus.php\" method=\"post\">";
		
					echo "<div id=\"contactus_title\">";
		
						echo "<h1>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Contact Us ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</h1>";
				
					echo "</div>";
					
					echo "<br>";

					echo "<div style=\"text-align: center; padding-top: 16px; background-color: #EEEEEE; height: full; font-size: 15px;\">";
			
						echo "<h2>Feel free to tell us your thought &#x263A</h2>";
			
						echo "<br>";

						echo "<input type=\"string\" name=\"UserName\" placeholder=\"Your Name\">";
			
						echo "<br><br><br>";
			
						echo "<input type=\"number\" name=\"UserPhoneNumber\" placeholder=\"Phone Number\">";
			
						echo "<br><br><br>";
			
						echo "<input type=\"character\" name=\"UserEmailAddress\" placeholder=\"Email Address\">";
			
						echo "<br><br><br>";
			
						echo "<textarea name=\"UserThought\" placeholder=\"Your Message\"></textarea>";
			
						echo "<br><br><br>";
			
						echo "<input type=\"submit\" name=\"submit\">";
			
						echo "<br><br>";
			
						echo "</div>";
		
					echo "</form>";
		
				include "ssgos_footer.html"; 
	
			echo "</body>";
	
		echo "</html>";
	
	}

?>