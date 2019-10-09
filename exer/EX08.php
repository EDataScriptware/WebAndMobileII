<?php

require "../../../dbConnect.inc";

?>

<?php
	if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){
	
    $stmt=$mysqli->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
    $stmt->bind_param("ss", $_GET['name'], $_GET['comment']);
    $stmt->execute();
        $stmt->close();

	  }//end of if to make sure data is sent using $_GET
    }//end of isset
	  //get contents of table and send back...
      $sql = 'SELECT name, comment from comments';
	  $res=$mysqli->query($sql);
	  if($res) {
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
         $records[] = $rowHolder;
        } // end of while loop
      } // End of IF loop
        
        
// var_dump($records);
          
          
	  } // End of if MYSQLI
?>
<!DOCTYPE html>
<html lang="en">
    	<link rel="stylesheet" type="text/css" href="assets/css/EX08.css">
    <head>
    <title>Comment Section</title>
    </head>
<header>
Please Leave a Comment Under Here
</header>
    
<body>
    <div class = "forms">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <p>Name: <input type="text" name="name" size="20" id="name" placeholder="Your Name" required></p>
    <textarea name="comment" rows="5" cols="65" id="comment" placeholder="Leave a comment here~!"></textarea> 
    	<br><input type="submit" class="submit" value="Comment!">

</form>
        </div>
<div class = "container">
    <table style="width:75%">
        <tr>
        <th>Name</th>
        <th>Comment</th>
        </tr>
      <?php       
          foreach($records as $this_row){
              
              echo '<tr><td><div class = "names">' . $this_row['name'] . '</div></td>' . '<td><div class = "comments">' . $this_row['comment'] . '</div></td></tr>';
          } // End of FOREACH loop ?>
        </table>
    </div>
    
    
    </body>
</html>
