<?php

$mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617");

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
// Get the user's Information & validates if not empty
if (!empty($_POST['customerName']))
    $custName = test_input($_POST['customerName']);
else
    $custName = "No customer name entered.";

if(!empty($_POST['customerPhone']))
    $custPhone = test_input($_POST['customerPhone']);
else
    $custPhone = "No phone number entered.";

if(!empty($_POST['customerEmail']))
    $custEmail = test_input($_POST['customerEmail']);
else
    $custEmail = "No customer email entered.";

if(!empty($_POST['customerAddress']))
    $custAddress = test_input($_POST['customerAddress']);
else
    $custAddress = "No address entered.";

if(!empty($_POST['customerCity']))
    $custCity = test_input($_POST['customerCity']);
else
    $custCity = "No city entered.";

if(!empty($_POST['customerState']))
    $custState = test_input($_POST['customerState']);
else
    $custState = "No state entered.";

if(!empty($_POST['customerZip']))
    $custZip = test_input($_POST['customerZip']);
else
    $custZip = "No zip code entered.";

if(!empty($_POST['customer-topping']))
    $topping = implode(', ', $_POST['customer-topping']);
   
else
    $topping = "No toppings selected.";

if(!empty($_POST['pizza-type']))
    $pizzaType = implode(', ', $_POST['pizza-type']);
   
else
    $pizzaType = "No pizza type selected.";
?>

<?php
	// Get the users Information
    $pizzaToppings = $_POST['PizzaTopping'];
    $pizzaType = $_POST['PizzaType'];

    $totalCost = 0;

    switch ($pizzaToppings)
    {
        case "pepperoni":
    $sql = "SELECT cost FROM pizza_toppings where topping='pepperoni'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Pepperoni";
    $totalCost = $totalCost + $pizzaCost;
					break;
            
             case "cheese":
    $sql = "SELECT cost FROM pizza_toppings where topping='cheese'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Cheese";
    $totalCost += $pizzaCost;
					break;  
    case "supreme":
    $sql = "SELECT cost FROM pizza_toppings where topping='supreme'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Supreme";
    $totalCost += $pizzaCost;
					break;
            case "onions":
    $sql = "SELECT cost FROM pizza_toppings where topping='onions'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "onions";
    $totalCost += $pizzaCost;
					break;
            case "banana peppers":
    $sql = "SELECT cost FROM pizza_toppings where topping='banana peppers'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Banana Peppers";
    $totalCost += $pizzaCost;
					break;
            case "jalapenos":
    $sql = "SELECT cost FROM pizza_toppings where topping='jalapenos'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Jalapenos";
    $totalCost += $pizzaCost;
					break;
            case "sausage":
    $sql = "SELECT cost FROM pizza_toppings where topping='sausage'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Sausage";
    $totalCost += $pizzaCost;
					break;
            case "bacon":
    $sql = "SELECT cost FROM pizza_toppings where topping='bacon'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Bacon";
    $totalCost += $pizzaCost;
					break;
            case "mushrooms":
    $sql = "SELECT cost FROM pizza_toppings where topping='mushrooms'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Mushrooms";
    $totalCost += $pizzaCost;
					break;
            case "spinach":
    $sql = "SELECT cost FROM pizza_toppings where topping='spinach'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Spinach";
    $totalCost += $pizzaCost;
					break;
            case "pineapple":
    $sql = "SELECT cost FROM pizza_toppings where topping='pineapple'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Pineapple";
    $totalCost += $pizzaCost;
					break;
            case "olives":
    $sql = "SELECT cost FROM pizza_toppings where topping='olives'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Olives";
    $totalCost += $pizzaCost;
					break;
            case "broccoli":
    $sql = "SELECT cost FROM pizza_toppings where topping='broccoli'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaToppings = "Broccoli";
    $totalCost += $pizzaCost;
					break;
        
        default:
            $pizzaToppings = "NONE";
            $pizzaCost = 0;
    break;
    }
	
      switch ($pizzaType)
    {
        case "pepperoni":
    $sql = "SELECT cost FROM pizza_type where name='pepperoni'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Pepperoni";
    $totalCost = $totalCost + $pizzaCost;
					break;
            
             case "cheese":
    $sql = "SELECT cost FROM pizza_type where name='cheese'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Cheese";
    $totalCost += $pizzaCost;
					break;  
    case "supreme":
    $sql = "SELECT cost FROM pizza_type where name='supreme'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Supreme";
    $totalCost += $pizzaCost;
					break;
            case "hawaiian":
    $sql = "SELECT cost FROM pizza_type where name='hawaiian'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Hawaiian";
    $totalCost += $pizzaCost;
					break;
            case "meat lovers":
    $sql = "SELECT cost FROM pizza_type where name='meat lovers'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Meat Lovers";
    $totalCost += $pizzaCost;
					break;
            case "veggie":
    $sql = "SELECT cost FROM pizza_type where name='veggie'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Veggie";
    $totalCost += $pizzaCost;
					break;
            case "sicilian":
    $sql = "SELECT cost FROM pizza_type where name='sicilian'";
    $results = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($results);
    $pizzaCost = $row[0];
    $pizzaType = "Sicilian";
    $totalCost += $pizzaCost;
					break;
            case "calzone":
    $sql = "SELECT cost FROM pizza_type where name='calzone'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_row($result);
    $pizzaCost = $row[0];
    $pizzaType = "Calzone";
    $totalCost += $pizzaCost;
					break;
           
        
        default:
            $pizzaType = "NONE";
            $pizzaCost = 0;
    break;
    } 
echo "<p>Pizza Toppings: " . $pizzaToppings . "</p>";
echo "<p>Pizza Type: " . $pizzaType . "</p>";
echo "<p>Total Cost: $" . $totalCost . "</p>";

         ?>
<?php
    $path = './';
  	require '../../../dbConnect.inc';
	if ($mysqli) {
	  if (isset($_GET['PizzaTopping']) && isset($_GET['PizzaName'])) {
	  if( $_GET['PizzaTopping']!='' && $_GET['PizzaName']!='' ){
		
                        
			/* 1)prepare my query */
            
			/* 2)bind */
            $stmt = $mysqli->prepare("INSERT INTO customer_data (name, phonenumber, email, address, city, state, zip, pizzatype, toppings) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssss", $custName, $custPhone, $custEmail, $custAddress, $custCity, $custState, $custZip, $topping, $pizzaType);
            
			/* 3)execute */
            $stmt->execute();
            
			/* 4)close */ 
            $stmt->close();

		
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
      $sql = 'SELECT name, phonenumber, email, address, city, state, zip, pizzatype, toppings FROM customer_data';
	  $res=$mysqli->query('SELECT name, phonenumber, email, address, city, state, zip, pizzatype, toppings FROM customer_data');
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
	  }
	}
?>
