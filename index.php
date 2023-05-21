<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking non-empty</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />
</head>

<body onload='document.form1.cardValidation.focus()'>
	<div class="mail">

	<h2>Payment Options</h2>

	<h3>Debit/ Credit Card</h3>
	
	<form name="form1" action="#">

	<ul>
	
	<li>Card Number <input type='text' name='cardValidation' maxlength = 16/></li>
	<li>&nbsp;</li>

	<li>Expiration Date 
	<select name="Expiration Month" id="expirationMonth">
        <option value="Month">Month</option>
		<option value="01">01</option> 		
        <option value="02">02</option> 
        <option value="03">03</option> 
        <option value="04">04</option> 
		<option value="05">05</option> 		
        <option value="06">06</option> 
        <option value="07">07</option> 
        <option value="08">08</option> 
		<option value="09">09</option> 		
        <option value="10">10</option> 
        <option value="11">11</option> 
        <option value="12">12</option> 
    </select> 
	
	<select name="Expiration Year" id="expirationYear"> 
		<option value="Year">Year</option>
        <option value="2020">2020</option> 		
        <option value="2021">2021</option> 
        <option value="2022">2022</option> 
        <option value="2023">2023</option> 
		<option value="2024">2024</option> 		
        <option value="2025">2025</option> 
        <option value="2026">2026</option> 
        <option value="2027">2027</option> 
		<option value="2028">2028</option> 		
        <option value="2029">2029</option> 
        <option value="2030">2030</option> 
    </select> 
	</li>

	<li>&nbsp;</li>

	<li>Security Code <input type='text' name='text2' minlength = 3 maxlength = 4 id = "securityCode"></li>
	<li>&nbsp;</li>
	<li>3-4 digit code normally on the back of your card</li>
	<li>&nbsp;</li>
	
	<a href = "secondpage.php"><li class="submit"><input type="submit" name="submit" value="Continue" onclick="cardnumber(document.form1.cardValidation)"/></li></a>
	
	</ul>

	</form>

	<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	?>

	</div>
	<script src="credit-card-master-validation.js"></script>
	</body>
</html>