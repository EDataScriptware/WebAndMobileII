<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Pizza Order</title>
	<link rel="stylesheet" type="text/css" href="assets/css/pizza.css">
	<script type="text/javascript" src="../assets/js/pizza.js"></script>
</head>
<body>

	<div id="wrapper">

	<h1>Eat more Pizza!</h1>
	<p><img src="./assets/images/hotpizza.png"></p>
<div id="container">
	<h2>Order a BIG NEW Delicious Pizza!</h2>

	<form name="OrderForm" action="EX07_orderprocess_updated2.php" onsubmit="return validateForm();" method="POST">
		<p>Name:  <input id="customer" type="text" name="customerName"></p>
		<p>ID:  <input type="text" id="customerID" name="customerID" style=""></p>
		<p id="errorID"></p>
        <p> Check the size of Pizza you would like to order:<br>
			<!-- Note the <label> tags below that allow the user to click on the text! -->
			<input type="radio" name="pizzaSize" value="P" id="personal"><label for="personal">Personal<label><br>
			<input type="radio" name="pizzaSize" value="S" id="small"><label for="small">Small<label><br>
			<input type="radio" name="pizzaSize" value="M" id="medium" checked="true"><label for="medium">Medium<label><br>
			<input type="radio" name="pizzaSize" value="L" id="large"><label for="large">Large<label>
		</label></label></label></label></label></label></label></label></p>
		<p>Select the number of toppings you want on your pizza:<br>
					<!-- Note the <label> tags below that allow the user to click on the text! -->
					<input type="radio" name="topping" value="0" id="zero"><label for="zero">No Extra Toppings<label><br>
					<input type="radio" name="topping" value="1" id="one"><label for="one">One Topping<label><br>
					<input type="radio" name="topping" value="2" id="two" checked="true"><label for="two">Two Toppings<label><br>
					<input type="radio" name="topping" value="3" id="three"><label for="three">Three Toppings<label>
		</label></label></label></label></label></label></label></label></p>
		<p>
			<input type="submit" value=" Send Form">
		</p>
	</form>
</div>
	<footer>Edward Riley Pizzeria<br>
        
    <?php
        echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
    ?>
        
        
        
        
    </footer>

</div></body></html>