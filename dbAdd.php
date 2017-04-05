<?php

$servername = "10.16.16.1";
$username = "bench-hu1-u-109501";
$password = "nDfMr^hnK";


$conn = mysqli_connect($servername, $username, $password);



$db_found = mysqli_select_db($conn, $username);



	if ($db_found) {

			$SQL = "INSERT INTO url_list (URL)
			VALUES ('http://www.reddit.com')";

			print_r($SQL . "<br/>");


			mysqli_close($db_handle);

			print "Records added";

		

	} else {

		print "Database not found";

	}

?>