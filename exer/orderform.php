<?php
	$path = './';
	$page = 'Pizza Order';
	include $path.'assets/inc/header.php'
        require $path.'../../../../dbConnect.inc';
?>

<div id="container">
	<h2>Order a BIG NEW Delicious Pizza!</h2>
	
	<form name="OrderForm" action="orderprocess_updated.php"  onsubmit="return validateForm();" method="POST">
    <p>Name: <input id ="customer" type = "text" name="customerName" /> </p>
        
	<p>ID: <input type = "text" id="customerID" name = "customerID" /> </p>
    
    <p></p>
    
    
    
    
    </form>
    
    
</div>
<?php 
	include $path.'assets/inc/footer.php';
?>