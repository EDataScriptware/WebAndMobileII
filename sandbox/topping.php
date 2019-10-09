<!DOCTYPE html>
<html lang="en">

<head>
    <title>WAM</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="mystyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Major+Mono+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <script src="javascript.js"></script>
</head>

<body onload="init();">
       <header>
            <div class="navmenu">
                <!-- EXTRA javascript controls the drop down menu -->
                <button onclick="dropDown()" class="dropbtn">&#9776;</button>
                <div id="myDropdown" class="menu">
                    <a href="#">Nav1</a>
                    <a href="#">Nav2</a>
                    <a href="#">Nav3</a>
                    <a href="#">Nav4</a>
                    <a href="#">Nav5</a>
                    <a href="#">Nav6</a>
                </div> <!-- end of menu  --> 
            </div>
                

            
                <div id="nav1"><a href="#">Nav1</a></div>
                <div id="nav2"><a href="#">Nav2</a></div>
                <div id="nav3"><a href=#>Nav3</a></div>
                <div id="logo"> [Logo]
                </div>
                <div id="nav4"><a href="#">Nav4</a></div>
                <div id="nav5"><a href="#">Nav5</a></div>
                <div id="nav6"><a href="#">Nav6</a></div>
                
        </header>
    
    <div id="wrapper" class="index2">
        
        <div class="content">
            
<?php
$path = './';
$mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617"); 
require $path.'../../../dbConnect.inc';
?>
                    
               <form action="topping_process.php" method="POST" class="form" onsubmit="return validateForm();">
  <h3>Customer Information:</h3>
                 
    <p>Name:  <input id="customer-name" type="text" name="customerName" value='<?php echo isset($_SESSION['customerName']) ? $_SESSION['customerName'] : ''; ?>'/> 
        
    <p>Phone Number:  <input id="customer-phone" type="text" name="customerPhone" maxlength="10" value='<?php echo isset($_SESSION['customerPhone']) ? $_SESSION['customerPhone'] : ''; ?>'/>
        
    <p>Email:  <input id="customer-email" type="text" name="customerEmail" value='<?php echo isset($_SESSION['customerEmail']) ? $_SESSION['customerEmail'] : ''; ?>'/>
        
    <p>Address:  <input id="customer-address" type="text" name="customerAddress" value='<?php echo isset($_SESSION['customerAddress']) ? $_SESSION['customerAddress'] : ''; ?>'/>
        
    <p>City:  <input id="customer-city" type="text" name="customerCity" value='<?php echo isset($_SESSION['customerCity']) ? $_SESSION['customerCity'] : ''; ?>'/>
        
  <p>State:</p>
			<select id="customer-state" name="customerState"><option value="---">---</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Marianas Islands">Northern Marianas Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Virgin Islands">Virgin Islands</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>
                   
    <p>Zip Code:  <input id="customer-zip" type="text" name="customerZip" maxlength="5" value='<?php echo isset($_SESSION['customerZip']) ? $_SESSION['customerZip'] : ''; ?>'/>
                   

                     
        <h3>Pizza Type:</h3>
        <?php
            //$mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617");
            $mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617");
            
  	        //require $path.'../../../dbConnect.inc';
	        if ($mysqli) { 
            }
            $sql = 'select * from pizza_type';
	        $res=$mysqli->query($sql);
            if($res){
                $i = 0;
		      while($rowHolders = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $record[] = $rowHolders;
                echo ("<input type=\"checkbox\" name=\"PizzaType\" value=\"".$record[$i]['name']."\">". $record[$i]['name']. " $ " .$record[$i]['cost']."<br>");
                $i++;
		      }
                
	        }
            mysqli_free_result($res);
	        
        ?>
                   
                   
<h3>Toppings:</h3>
<?php
        
            //$mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617");
  	        //require $path.'../../../dbConnect.inc';
	        if ($mysqli) { 
            }
            $sql = 'select * from pizza_toppings';
	        $res=$mysqli->query($sql);
            if($res){
                $i = 0;
                
                
		      while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $records[] = $rowHolder;
                echo ("<input type=\"checkbox\" name=\"PizzaTopping\" value=\"".$records[$i]['topping']."\">" . $records[$i]['topping'] . "<br>");
                $i++;
		      }
	        }
                   
            mysqli_free_result($res);
	                         
        ?>

                   <?php
                    
                   
                   ?>
        <input type="submit" value="submit"> 
        <input type="reset">
        
    </form>
            </div>
        
    
    </div>    
       <footer>
            footer data/text
            
        </footer>
</body>

</html>