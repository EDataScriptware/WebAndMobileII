<?php
	$page='Pike';
	$caption2 = "Red Devil Lures";
	$path='../';
	include($path.'assets/inc/header.php');
?>
<?php
	include($path.'assets/inc/nav.php');
?>
	<!--<h1>Home page stuff...</h1>
	<div>(eventually, each page will be some includes and a db call only!)</div>-->
	<?php
	    require $path.'../../../../dbConnect.inc';           



          

             //Looking for internal CSS specific to this one page - To override external CSS
               $sql = "SELECT CSS_Internal  FROM modularSite where page='$page'";
                $result = $mysqli->query($sql);

                if($result->num_rows > 0){
                        //output the data for each row
                        while ($row = $result->FETCH_ASSOC()) {
                                echo $row['CSS_Internal'];
                        }// if internal CSS was supplied in the record for the page
                }//end of if to get internal CSS



		$sql = "SELECT content FROM modularSite where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
	?>

<?php
  $len = 0;
  $sql = "SELECT AbsoluteLinkPicture2 from modularSite  where page='$page'";
  $res = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_row($res);  
  $picture = $row[0];
// obtained picture from a column in modularSite  table  with the page column = "bass"
 $caption="Pike my Dad caught in 2014";
?>s


<div id="fish">
          <figure>
<?php             
    echo '<img class="LargeMouth" src = "' . $picture . '" alt = "Pike" title="Pike"  />';
?>
               <br />
            <figcaption>
            <?php
            echo "$caption"; ?>
            </figcaption>
            </figure>
 </div> <!-- end of div fish -->
 
 <div id="bait">

<?php
  $sql = "SELECT AbsoluteLinkPicture FROM modularSite where page='$page'";
  $res = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_row($res); 
  
  $bait = $row[0];
  //echo "$bait"; 
?>


<figure>


<?php             
  echo '<img class="MyDadsBait" src = "' . $bait . '" alt = "Bait" title="Bait"  />';
?>

<br />
<figcaption>
<?php
  echo "$caption2"; 
 ?>
</figcaption>
</figure>
</div>  <!-- end of div of bait -->

<div id = "lure">
<?php
  $sql = "SELECT imageLink FROM individual_project_part2_images where page='$page' and number = 2";
  $res = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_row($res); 
  
  $lure = $row[0];
  //echo "$lure"; 
  $sql = "SELECT alt FROM individual_project_part2_images where page='$page' and number = 2";
  $res = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_row($res); 
  $alt = $row[0];
  $caption3 = "Lure";
  
  
?>


<figure>


<?php             
  echo '<img class="Lure" src = "' . $lure . '" alt = "$alt" title="$alt"  />';
?>

<br />
<figcaption>
<?php
  echo "$caption3"; 
 ?>
</figcaption>
</figure>
</div> <!-- end of picture of a Lure -->




 <style>
     #fish { clear:both;}
     #bait { clear:both;}
     #ending {clear:both;}
 </style>

<div id = "ending">
<p>&nbsp;</p>
<h4>Late May when the water is 50-60 degrees Pike hit the Red Devel bait.</h4>
</div> <!-- end of ending -->


<?php
    require($path.'assets/inc/footer.php');
    mysqli_close($mysqli);

?>
