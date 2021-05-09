<!DOCTYPE html>
<html>
<head>
	<title>Moneyview</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css"><!-- reset-CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css"><!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
</head>
<body>
	<section class="flex-container">
		<form action="#">
			<label for="amount">Hello:</label><br>
		  	<input type="number" id="amount" name="amount"><br>

		  	<label for="purpose">Purpose:</label><br>
		  	<input type="purpose" id="purpose" name="purpose"><br>
		  
		  	<label for="webapp">Website/app:</label><br>
		  	<input list="webapp" name="webapp">
		  	<datalist id="webapp">
		  		<option value="Internet Explorer">
		    	<option value="Firefox">
		    	<option value="Chrome">
		  	</datalist><br>
		  
		  	<label for="account">Account:</label><br>
		  	<input list="account" name="account">
		  	<datalist id="account">
		  		<option value="Internet Explorer">
		    	<option value="Firefox">
		    	<option value="Chrome">
		  	</datalist><br>

		  	<label for="bankcc">Bank/CC:</label><br>
		  	<input list="bankcc" name="bankcc">
		  	<datalist id="bankcc">
		  		<option value="Internet Explorer">
		    	<option value="Firefox">
		    	<option value="Chrome">
		  	</datalist><br>

		  	<label for="person">For Whom:</label><br>
		  	<input list="person" name="person">
		  	<datalist id="person">
		  		<option value="Internet Explorer">
		    	<option value="Firefox">
		    	<option value="Chrome">
		  	</datalist><br>

		  	<label for="category">Category:</label><br>
		  	<input list="category" name="category">
		  	<datalist id="category">
			    <option value="Internet Explorer">
			    <option value="Firefox">
			    <option value="Chrome">
			    <option value="Opera">
			    <option value="Safari">
		  	</datalist><br><br>

		  	<input type="submit">
		</form>
	</section>
	<script src="js/jquery_3_4_1_min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>