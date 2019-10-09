<?php
$servername = "localhost";
$username = "emr9018";
$password = "billbring";
$dbname = "emr9018";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
else
{
  echo '<script>';
  echo 'console.log("Connection success")';
  echo '</script>';
}

?>

<?php 
$mysqli("INSERT INTO comments VALUES ($id,$name,$comments)");
else
{
die("Fill out everything please. Mkay.");
}
?>
