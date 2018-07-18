<?php

	if ( isset($_POST['submit']) ) {	
		
		$headpQuantity = $_POST['headprotection'];
		$bpQuantity = $_POST['bodyprotection'];
		$handpQuantity = $_POST['handprotection'];
		$gmQuantity = $_POST['gasmask'];
		$count = 0;
		$payment = 0;
		$headpCost = 0;
		$bpCost = 0;
		$handpCost = 0;
		$gmCost = 0;
	
		if ( $headpQuantity >= 1 ) {
			
			$headpCost = $headpQuantity * 16;
			
			++$count;
			
		} 
		
		if ( $bpQuantity >= 1 ) {
			
			$bpCost = $bpQuantity * 18.9;
			
			++$count;
			
		} 
		
		if ( $handpQuantity >= 1 ) {
			
			$handpCost = $handpQuantity * 20.8;
			
			++$count;
			
		} 
	
		if ( $gmQuantity >= 1 ) {
			
			$gmCost = $gmQuantity * 40.9;
			
			++$count;
			
		} 
		
		$payment = $headpCost + $bpCost + $handpCost + $gmCost;
		
		if ( $count >= 1 ) {
		
			if($connect = mysqli_connect('localhost', 'root', '')) {
					if(mysqli_select_db($connect, 'ssgos')) {
						
						$headpquantity = trim($headpQuantity);
						$bpquantity = trim($bpQuantity);
						$handpquantity = trim($handpQuantity);
						$gmquantity = trim($gmQuantity);
						$headpCost = trim($headpCost);
						$bpCost = trim($bpCost);
						$handpCost = trim($handpCost);
						$gmCost = trim($gmCost);
						$totalCost = trim($payment);
				
						$query = "INSERT INTO shoppingcart (headpquantity, bpquantity, handpquantity, gmquantity, headpcost, bpcost, handpcost, gmcost, SinglePurchaseCost) VALUES ('{$headpquantity}', '{$bpquantity}', '{$handpquantity}', '{$gmquantity}', '{$headpCost}', '{$bpCost}', '{$handpCost}', '{$gmCost}', '{$totalCost}' )";
				
						if(mysqli_query($connect, $query)) {
							
							echo "";
							
						} else {
							
							echo "Connection to table shoppingcart result in failure.";
						
						}
				
					} else {
						
						echo '<p>Connection to database ssgos failed.</p>';
						
						}
			
					} else {
						
						echo '<p>'. mysqli_connect_error($connect) .'</p>';
			
						}
						
				mysqli_close($connect);
			
			echo "<html>";
			
				echo "<head>";
				
					echo "<title>Smith Safety Gear Online Store_Shoppong Cart page</title>";
					
					echo "<style>";
			
						echo "body { background-color: #EEEEEE; }";
			
				    echo "</style>";
			
				echo "</head>";
				
				echo "<body>";
				
					include "ssgos_header.html";
					
					echo "<div align=\"center\" style=\"background-color: #e0e0e0\">";
					
						echo "<h1>&#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF Shopping Cart &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF</h1>";
					
					echo "</div>";
					
					echo "<div align=\"center\" style=\"background-color: #EEEEEE\">";
					
						echo "<h2>What's inside of your shopping cart</h2><br><b>";
						
						if ( $headpQuantity == 0 ) {
							
							echo "1. Head Protection(quantity + cost): None<br><br><br>";
							
						} else { 
						
							echo "1. Head Protection(quantity/cost): $headpQuantity / RM$headpCost<br><br><br>";
							
						}
						
						if ( $bpQuantity == 0 ) {
							
							echo "2. Body Protection(quantity + cost): None<br><br><br>";
							
						} else {
							
							echo "2. Body Protection(quantity/cost): $bpQuantity / RM$bpCost<br><br><br>";
							
						}
						
						if ( $handpQuantity == 0 ) {
							
							echo "3. Hand Protection(quantity + cost): None<br><br><br>";
							
						} else {
							
							echo "3. Hand Protection(quantity/cost): $handpQuantity / RM$handpCost<br><br><br>";
							
						}
						
						if ( $gmQuantity == 0 ) {
							
							echo "4. Gas Mask(quantity + cost): None<br><br><br>";
							
						} else {
							
							echo "4. Gas Mask(quantity/cost): $gmQuantity / RM$gmCost<br><br><br>";
					
						}
						
						echo "<b>Total payment: RM$payment</b>";
						
						echo "&nbsp&nbsp&nbsp<a href=\"ssgos_homepage.php\"><img src=\"picture/cancel.png\" alt=\"button to cancel payment\" height=\"20px\" width=\"20px\"></a>";
					
						echo "<br><br><img src=\"picture/sc1.jpg\" alt=\"Thank you\" width=\"500px\" height=\"250px\">";
					
					echo "</b></div>";
				
					include "ssgos_footer.html";
				
				echo "</body>";
				
			echo "</html>";	
			
		} else {
			
			echo "<html>";
			
					echo "<head>";
					
						echo "<title>Smith Safety Gear Online Store_empty shopping cart</title>";
						
						echo "<style>";
			
							echo "body { background-color: #EEEEEE; }";
			
					    echo "</style>";
			
					echo "</head>";
				
					echo "<body>";
				
						include "ssgos_header.html";
					
						echo "<div align=\"center\" style=\"background-color: #e0e0e0\">";
					
							echo "<h1>&#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF Shopping Cart &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF</h1>";
					
						echo "</div>";
					
						echo "<div align=\"center\" style=\"background-color: #EEEEEE\">";
					
							echo "<h2>What's inside of your shopping cart</h2><br><b>";
						
							echo "<a href=\"ssgos_homepage.php\"><img src=\"picture/sc2.jpg\" alt=\"clickable image that direct to home page\" width=\"780px\" height=\"500px\"></a>";
								
							echo "<br><br></div>";
				
						include "ssgos_footer.html";
				
					echo "</body>";
				
				echo "</html>";
				
		}		
		
	} else {
		
		echo "<html>";
			
				echo "<head>";
				
					echo "<title>Smith Safety Gear Online Store_empty shopping cart</title>";
					
					echo "<style>";
			
						echo "body { background-color: #EEEEEE; }";
			
					echo "</style>";
			
				echo "</head>";
				
				echo "<body>";
				
					include "ssgos_header.html";
					
					echo "<div align=\"center\" style=\"background-color: #e0e0e0\">";
					
						echo "<h1>&#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF Shopping Cart &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF &#x2708 &#x26F4 &#x26DF</h1>";
					
					echo "</div>";
					
					echo "<div align=\"center\" style=\"background-color: #EEEEEE\">";
					
						echo "<h2>What's inside of your shopping cart</h2><br><b>";
						
						echo "<a href=\"ssgos_homepage.php\"><img src=\"picture/sc2.jpg\" alt=\"clickable image that direct to home page\" width=\"780px\" height=\"500px\"></a>";
						
						echo "<br><br></div>";
				
					include "ssgos_footer.html";
				
				echo "</body>";
				
			echo "</html>";	
		
	}
	
?>