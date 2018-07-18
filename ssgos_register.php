<?php 

	if ( isset($_POST['submit']) ) {
	
		$UserName = $_POST['username'];
		$UserPassword = $_POST['password'];
		$UserEmailAddress = $_POST['email'];
		$UserBirthDay = $_POST['birthdayDay'];
		$UserBirthMonth = $_POST['birthdayMonth'];
		$UserBirthYear = $_POST['birthdayYear'];
		$count = 0;

		include "ssgos_header.html";
		
		echo "<div align=\"center\" style=\"background-color: #eeeeee; padding-top: 150px\">";
	
			if ( !empty($UserName) ) {
			
				++$count;
			
			} else {
				
				echo "<style> body { background-color: #EEEEEE } </style>";
			
				echo "<p align=\"center\"><font size=\"10\"><b>Please fill username field</b></font></p><br><br>";
			
			}
		
			if ( !empty($UserPassword) ) {
			
				++$count;
			
			} else {
				
				echo "<style> body { background-color: #EEEEEE } </style>";
			
				echo "<p align=\"center\"><font size=\"10\"><b>Please fill password field</b></font></p><br><br>";
			
			}
		
			if ( !empty($UserEmailAddress) ) {
			
				++$count;
			
			} else {
				
				echo "<style> body { background-color: #EEEEEE } </style>";
			
				echo "<p align=\"center\"><font size=\"10\"><b>Please fill user email address field</b></font></p><br><br>";
			
			}
		
			if ( !empty($UserBirthDay) ) {
			
				++$count;
			
			}
		
			if ( !empty($UserBirthMonth) ) {
			
				++$count;
			
			}
		
			if ( !empty($UserBirthYear) ) {
			
				++$count;
			
			}
		
			if ( $count == 6 ) {
				
				session_start();
				
				$_SESSION['username'] = $UserName;
				$_SESSION['userpassword'] = $UserPassword;
				
				echo "<style> body { background-color: #EEEEEE } ";
				echo "h1 { padding: 20px; font-size: 60px; text-align: center; color: #FFD500; border-style: solid; border-color: #A2A2A2; border-width: 7px; margin: 10px; }";
				echo "h2 { padding: 14px; text-align: center; border-style: solid; border-color: #A2A2A2; border-width: 5px; margin: 10px; }</style>";
				
				echo "<h1>Account Registration Successful</h1>";
				echo "<h2>Welcome, $UserName! Your account have been created successfully.<br><br>Below is your input information:<br><br>";
				echo "Name: $UserName<br><br>Password: $UserPassword<br><br>Birth date(dd/mm/yy): $UserBirthDay/$UserBirthMonth/$UserBirthYear<br><br>Email address: $UserEmailAddress";
				echo "<br><br>We are happy that you have become part of our community and we looking forward to your next visit and again, thank you! &#x263A</h2>";
			
			} else {

				echo "<br><br><div align=\"center\"><a href=\"ssgos_register.php\"><font size=\"15\">";
				echo "<b style=\"padding: 20px; border-style: solid; border-width: 5px; border-color: red;\">Click this to go back to Register page</b></font>";				
				echo "</a><br><br><br><br><br><br><br><br><br><br></div>";
				
			}
		
		echo "</div>";
		
		include "ssgos_footer.html";	
		
	} else {

		$birthdayDay = 0;
		$birthdayMonth = 0;
		$birthdayYear = 0;

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
							echo "margin: 2px 0;";
							echo "display: incline-blick;";
							echo "border: 1px solid #ccc;";
							echo "border-radius: 4px;";
							echo "box-sizing: border-box;";
						echo "}";
						
						echo "input[type=text], select {";
							echo "width: 34%;";
							echo "padding: 12px 20px;";
							echo "margin: 10px 0;";
							echo "display: incline-blick;";
							echo "border: 1px solid #ccc;";
							echo "border-radius: 4px;";
							echo "box-sizing: border-box;";
						echo "}";
		
						echo "input[type=number], select {";
							echo "width: 34%;";
							echo "padding: 12px 20px;";
							echo "margin: 0px 0;";
							echo "display: incline-blick;";
							echo "border: 1px solid #ccc;";
							echo "border-radius: 4px;";
							echo "box-sizing: border-box;";
						echo "}";
		
						echo "input[type=password], select {";
							echo "width: 34%;";
							echo "padding: 12px 20px;";
							echo "margin: 10px 0;";
							echo "display: incline-blick;";
							echo "border: 1px solid #ccc;";
							echo "border-radius: 4px;";
							echo "box-sizing: border-box;";
						echo "}";
					
						echo ".dropdown {";
							echo "width: 280px;";
					
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
	
				echo "<div align=\"center\" style=\"background-color: #E0E0E0\">";
			
					echo "<h1>&#x2711 &#x2711 &#x2712 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712  &#x2711 &#x2712 Register &#x2711 &#x2712  &#x2711 &#x2712 &#x2711 &#x2712  &#x2711 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712 &#x2711 &#x2712</h1>";

				echo "</div>";
			
				echo "<div align=\"center\" style=\"background-color: #EEEEEE\"><b>";
			
					echo "<h2 style=\"padding-top: 10px	\">&#x263A Create your account here and be part of our community &#x263A</h2><br>";
					
					echo "<form action=\"ssgos_register.php\" method=\"post\">";
				
						echo "<input type=\"string\" name=\"username\" placeholder=\"Input your username here. For example, Smith Smooth.\"><br><br><br>";
					
						echo "<input type=\"password\" name=\"password\" id=\"unhideThis\" placeholder=\"Input password here. FOR EXAMPLE, Abc123.\"><br>";
						echo "<input type=\"checkbox\" id=\"check\" onclick=\"showPassword()\">Unhide Password";
					
						echo "<br><br><br>Birth date(day/month/year):";
					
						echo "<div class=\"dropdown\">";
					        
							echo "<select name=\"birthdayDay\">";	
						
									for ( $day = 1; $day <= 31; $day++ ) {
								
										echo "<option value=\"$day\">$day</option>";
								
										$birthdayDay = $day;
								
									}
									
							echo "</select>";
					
							echo "<select name=\"birthdayMonth\">";
						
									for ( $month = 1; $month <= 12; $month++ ) {
								
										echo "<option value=\"$month\">$month</option>";
								
										$birthdayMonth = $month;
								
									}
					
							echo "</select>";
							
					
							echo "<select name=\"birthdayYear\">";
						
									for ( $year = 1890; $year <= 2020; $year++ ) {
								
										echo "<option value=\"$year\">$year</option>";
								
										$birthdayYear = $year;
								
									}
					
							echo "</select>";
					
						echo "</div>";
					
						echo "<br><input type=\"string\" name=\"email\" placeholder=\"Input your Email Address here. For example, xxx@gmail.com\">";
					
						echo "<br><br><input type=\"submit\" name=\"submit\" value=\"Create my account!!!\">";
				
					echo "</form>";
			
				echo "</b></div>";
			
				include "ssgos_footer.html";
		
			echo "</body>";
	
		echo "</html>";
	
	}
	
?>