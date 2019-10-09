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
                    
               <form>
                   Toppings:<br>
        <?php
            $mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617");
  	        require 'dbConnect.inc';
	        if ($mysqli) {
	  if (isset($_GET['topping']) && isset($_GET['cost'])) {
	  if( $_GET['topping']!='' && $_GET['cost']!='' ){
	
    $stmt=$mysqli->prepare("INSERT INTO pizza_toppings (topping, pizza) VALUES (?, ?)");
    $stmt->bind_param("ss", $_GET['topping'], $_GET['cost']);
    $stmt->execute();
        $stmt->close();

	  }//end of if to make sure data is sent using $_GET
    }//end of isset
        
	  //get contents of table and send back...
      $sql = 'SELECT topping, cost from pizza_toppings';
	  $res=$mysqli->query($sql);
	  if($res) {
          $i =0;
          echo "Test #1";
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
         $length = count($rowHolder);
         $records[] = $rowHolder;
            if ($rowHolder >= $i)
            {
        var_dump($i);
            
            echo "Test #2";
        echo ("<input type=\"checkbox\" name=\"topping".$i."\" value=\"".$records[$i]['topping']."\">".$records[$i]['topping']."<br>");
                $i++; 
                }//end of the if statement for counters
            else
            {
                echo "End of the Database Query";
            }
        } // end of while loop
      } // End of IF loop
            }
      
                   ?>
        
        <input type="submit" value="submit">
        
    </form>
            </div>
        
    
    </div>    
       <footer>
            footer data/text
            
        </footer>
</body>

</html>