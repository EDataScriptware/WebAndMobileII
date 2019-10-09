<!DOCTYPE html>
<html lang = "en">
<!-- AUTHOR: Edward Riley  -->
<!-- DATE: 2/12/2018  -->
<!-- DESCRIPTION: Create a webpage that allows the user to be able to tell us about their visit. -->
    
    
    <head>
<a name="top"></a>
    <meta charset="UTF-8">


    <title>Riley Exercise 4</title>
    <link rel = "stylesheet" type="text/css" href="assets/css/exercises4.css">
  


    <div class="header">
         <div class="logo">   <img src="assets/images/MyTown.png" alt="MyTown" width="250" height="175"></div>
        
        <nav><span style="cursor:pointer"><a href="../index.php">Home</a> | Activities | Food | Rest | People | Feedback | ...</span></nav>  

    </div>

    
</head>
<body>
<div class="subheader">Please tell us about your visit:</div>
   <form action="exercises4FormDone.php" method="post" onsubmit="return validateForm();">
Your Name: <input type="text" name="name" required>   
       <br>
    How many in your group? <select name="NumberOfPeople">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
       <br>
       When did you visit? 
       <input id="datefield" type='date' min='1899-01-01' max='2000-13-13'id="start" name="trip-start"
       value="2019-02-10">
       <br>
       
       <fieldset><legend>Favorite Place</legend>
           <input type="radio" name="favorite_place" value="Baseball">Baseball Field<br>
           <input type="radio" name="favorite_place" value="Museum">Museum<br>
           <input type="radio" name="favorite_place" value="Italian">Luigi's Italian Restaurant<br>
           <input type="radio" name="favorite_place" value="Hotel">Mom's Hotel<br>
           <input type="radio" name="favorite_place" value="Youth">The Youth Hostel<br>
       </fieldset>
       <br>
       <center>Overall Rate your visit to MyTown</center>
       <center>0 <input type="range" name="points" min="0" max="10" default="5"> 10</center>
       <center> <input type="submit" value="Submit"></center>
       
    </form>
        <div class = "validator">
        
        <?php
$filename = 'exercises4.php';
if (file_exists($filename)) {
    echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
}
?>
    </div>
    </body>
    <script>
    
    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("max", today);
document.getElementById("datefield").setAttribute("value", today);

    
    </script>
</html>