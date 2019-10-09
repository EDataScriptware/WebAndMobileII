<?php
//                      whichMachine  username    password  whichDatabaseToUse
$mysqli = mysqli_connect("localhost", "ndn4617", "familymars", "ndn4617");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>