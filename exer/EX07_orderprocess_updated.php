<?php
	$path = './';
	$page = 'Pizza Order';
	include $path.'assets/inc/header.php';
?>

<?php
	// Get the users Information
	$custName = $_POST['customerName'];
	$custID = $_POST['customerID'];
	$pizzaSize = $_POST['pizzaSize'];
    $pizzaToppings = $_POST['topping'];

	// Validate the customer ID for numeric
	if (empty($custID)) {
    header("Location:orderform.php?name=$custName");
    }
	else {
		if(!is_numeric($custID)) {
			echo "<p>Customer ID" .
				$custID .
				" is not a valid ID " .
				" because it contains a non-numeric" .
				" character.</p>";
			echo "<p><form action='orderform.php'><input type=sumbit value='ok'></form></p>";
		}
        //Save the variables for price and type of pizza
		else {
			switch ($pizzaSize)
			{
				case "P":
					$pizzaCost = 7.99;
					$pizzaType = "Personal";
					break;
				case "S":
					$pizzaCost = 10.99;
					$pizzaType = "Small";
					break;
                case "M":
				$pizzaCost = 13.99;
					$pizzaType = "Medium";
					break;
				case "L":
					$pizzaCost = 16.99;
					$pizzaType = "Large";
					break;
				default: //if no choice, customer gets medium
					$pizzaCost = 13.99;
					$pizzaType = "Medium";
					break;
			} //end of switch
            
            switch ($pizzaToppings)
            {
                case "0":
                    $priceOfTopping = 0.00;
                    break;
                case "1":
                    $priceOfTopping = 2.00;
                    break;
                case "2":
                    $priceOfTopping = 3.00;
                    break;
                case "3":
                    $priceOfTopping = 3.75;
                    break;
            } //end of switch
            
			setlocale(LC_MONETARY, 'en_US');
			// dropping out of PHP just to show you we can
            $total = $pizzaCost + $priceOfTopping
        ?>
			<div id="receipt">
				<br>Your Delicious Pizza Order
				<br>
				<br><?php echo $pizzaType ?> Pizza Price: <?php echo money_format("%(#6n", $pizzaCost) ?>
              <br>Topping Price: <?php echo money_format("%(#6n", $priceOfTopping) ?>
              <br>Tax Amount 8%: <?php echo money_format("%(#6n", $tax = $total * .08) ?>
              <br>Total Cost of your order is: <?php echo money_format("%(#6n", $total + $tax); ?>
              <br>
              <br>
              <?php 
        }
        } //end of else - validation
            ?>
			</div>
<?php include $path.'assets/inc/footer.php'; ?>