<?php

	if ( isset($_POST['submit']) ) {
		
		include "ssgos_header.html";
		
		echo "<div align=\"center\" style=\"background-color: #eeeeee; padding-top: 200px\">";
		
			$count = 0;
			
		
			if ( !empty($_POST['signinName']) ) {
			
				++$count;
			
			} else {
			
				echo "<p align=\"center\"><font size=\"10\"><b>Invalid user ID field</b></font></p><br><br>";
			
			}
		
			if ( !empty($_POST['signinPassword']) ) {
			
				++$count;
			
			} else {
			
				echo "<p align=\"center\"><font size=\"10\"><b>Invallid password field</b></font></p><br><br>";
			
			}
		
			if ( $count == 2 ) {
			
				session_start();
				
				$checkUN = $_SESSION['username'];
				$checkUP = $_SESSION['userpassword'];
				
				echo "<style> body { background-color: #EEEEEE } ";
				echo "h1 { padding: 20px; font-size: 60px; text-align: center; color: #FFD500; border-style: solid; border-color: #A2A2A2; border-width: 7px; margin: 10px; }";
				echo "h2 { padding: 14px; text-align: center; border-style: solid; border-color: #A2A2A2; border-width: 5px; margin: 10px; }</style>";
				
				if ($_POST['signinName'] == $checkUN && $_POST['signinPassword']) {
					echo "<h1>Login Successful</h1>";
					echo "<h2>Welcome back, $checkUN!</h2>";
				} else {
					echo "<h1>Login Unsuccessful</h1>";
					echo "<h2>Please make sure the username and password you enter is correct.";
					echo "<br><br><a href=\"ssgos_signin.php\">Click here to try again</a></h2>";
				}
			
			} else {
			
			    echo "<style>body { background-color: #EEEEEE }</style>";
				echo "<div align=\"center\"><a href=\"ssgos_signin.php\"><font size=\"15\">";
				echo "<b style=\"padding: 20px; border-style: solid; border-width: 5px; border-color: red;\">Click this to go back to sign in page</b></font></a></div>";
			
			}
		
		echo "</div>";
		
		include "ssgos_footer.html";
		
	} else {

		echo "<html>";
	
			echo "<head>";
		
				echo "<title>Smith Safety Gear Online Store_Register page</title>";
			
				echo "<script>";
					echo "function showPassword() {";
					echo "var pass = document.getElementById('unhideThis');";
					echo "if(document.getElementById('check').checked) {";
						echo "pass.setAttribute('type','text');";
					echo "} else {";
						echo "pass.setAttribute('type','password');";
						echo "}";
					echo "}";
				echo "</script>";
				
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
							
							echo "input[type=text], select {";
								echo "width: 34%;";
								echo "padding: 12px 20px;";
								echo "margin: 2px 0;";
								echo "display: incline-blick;";
								echo "border: 1px solid #ccc;";
								echo "border-radius: 4px;";
								echo "box-sizing: border-box;";
						    echo "}";
		
							echo "input[type=password], select {";
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
			
				echo "<div align=\"center\" style=\"background-color: #e0e0e0\">";
			
					echo "<h1> &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 Sign In&#x2601 &#x2601&#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601 &#x2601</h1>";
				
				echo "</div>";
				
				echo "<div align=\"center\" style=\"background-color: #eeeeee; padding-top: 10px\"><b>";
			
					echo "<h2>Sign into your account</h2><br>";
			
					echo "<form action=\"ssgos_signin.php\" method=\"post\">";
				
						echo "<input type=\"string\" name=\"signinName\" placeholder=\"Input your username here\"><br><br>";
					
						echo "<input type=\"password\" name=\"signinPassword\" id=\"unhideThis\" placeholder=\"Input your password here\"><br>";
						echo "<input type=\"checkbox\" id=\"check\" onclick=\"showPassword()\">Unhide Password";
					
						echo "<br><br>";
					
						echo "<input type=\"submit\" name=\"submit\" value=\"Sign In\">";
					
						echo "<br><br>";
				
					echo "</form>";
				
					echo "<img src=\"picture/signin1.jpg\" alt=\"never give up your password\" width=\"300px\" height=\"200px\">";
			
				echo "</b><br><br></div>";
			
				include "ssgos_footer.html";
		
			echo "</body>";
	
		echo "</html>";
	
	}

?>