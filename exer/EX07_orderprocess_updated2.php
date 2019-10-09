<?php
require "../../../dbConnect.inc";
?>


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
    $sql = "SELECT price FROM pizzacost where size='P'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
     					$pizzaType = "Personal";
					break;
				case "S":
					   $sql = "SELECT price FROM pizzacost where size='S'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
					break;
                case "M":
   $sql = "SELECT price FROM pizzacost where size='M'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];					$pizzaType = "Medium";
					break;
				case "L":
   $sql = "SELECT price FROM pizzacost where size='L'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];					$pizzaType = "Large";
					break;
				default: //if no choice, customer gets medium
   $sql = "SELECT price FROM pizzacost where size='M'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];					$pizzaType = "Medium";
					break;
			} //end of switch
            
           switch ($pizzaToppings)
            {
                case "0":
   $sql = "SELECT cost FROM pizzatopping where topping='0'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $priceOfTopping = $row[0];  
                   break;
                case "1":
$sql = "SELECT cost FROM pizzatopping where topping='1'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $priceOfTopping = $row[0];                      break;
                case "2":
$sql = "SELECT cost FROM pizzatopping where topping='2'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $priceOfTopping = $row[0];                      break;
                case "3":
$sql = "SELECT cost FROM pizzatopping where topping='3'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $priceOfTopping = $row[0];                      break;
            } //end of switch*/
            
            //Extracting data from Database table pizzatopping
            $toppingCost = -0;
            
            // Other method to obtain data from a database table
            if ($mysqli)
            {
                $sql = 'select topping, cost from pizzatopping';
            }
            
            $res=$mysqli->query($sql);
            if($res->num_rows > 0){
                echo "<p>Pizza topping table has " . $res->num_rows . " rows </p><br \>";
                
               
            } //you have all records of the database table
            else
            {
                echo "<p> Error in select statement zero records retrieved!";
                die("Unable to continue - data error");
            }//end of else - select is wrong - check variable $sql
        } //I have connected to database access granted
        
			//setlocale(LC_MONETARY, 'en_US');
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
         //end of else - validation
            ?>
			</div>
<?php include $path.'assets/inc/footer.php'; ?>