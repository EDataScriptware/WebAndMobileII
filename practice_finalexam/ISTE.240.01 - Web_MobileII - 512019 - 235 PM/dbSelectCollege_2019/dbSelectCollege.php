<?php
	$path = './';
	$page = 'Rochester Colleges';
	require  $path.'assets/inc/header2.php';
?>	


<?php
	/*
		Connecting and getting data from a database in php!
			1. Connect to the db
			2. build the query
			3. retrieve/store the query
			4. close the connection
			5. do something with the results
	*/
    $path = "./";
	require $path.'../../../../../dbConnect.inc';
	//end step 1

	//step 2. build the query

	//select from tableName where name=val and other=otherVal
	$sql = "SELECT college, state, city  FROM collegeinfo WHERE city = 'Rochester'";

	//step 3 - execute the query
	if($results = $mysqli->query($sql) ){
		//printf("select returned %d rows<br/>", $results->num_rows);
		//same as below
		echo("<h3>SELECT returned ".$results->num_rows." rows.</h3><br>");
		echo('<p>Where the $sql was   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' . $sql. " </p>");
	}else{
		echo 'issue with query';
	}

	//at this point, $results holds a pointer to the data, need to turn it into
	//something useful!

	//make a multi-dimensional ARRAY
	if($results){
		//loop through results
		while($rowHolder = mysqli_fetch_array($results,MYSQLI_ASSOC)){
			$records[]=$rowHolder;
		}
	}
//    echo('<br /> var_dump($records) ');
//	var_dump($records);
    
	//step 4 - cleanup....
	mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Rochester</title>
</head>
<body>
    <div id="table">
        <table>
        <tr>
            <th class="Center" colspan="3">Popular Rochester Colleges</th>
        </tr>
        <tr>
            <th>College</th>
            <th>State</th>
            <th>City</th>
        </tr>
        <?php 
    foreach($records as $this_row){
        echo '<tr><td>'.$this_row['college'].'</td><td>'.$this_row['city'].'</td><td>'.$this_row['state'].'</td></tr>';
    }
    ?>
    </table>
<?php

	    require  $path.'assets/inc/footer2.php';
?>
    </div>
</body>
</html>