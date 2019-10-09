<?php
//                      whichMachine  username    password  whichDatabaseToUse
$mysqli = mysqli_connect("localhost", "emr9018",   "billbring", "emr9018");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
?>