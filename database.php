<?php

require "../configure.php";

	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

	print "Server found" . "<br/>";

	$database = "addressbook";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) {

			print "Database found";

	}

	else {

		print "Databse not found";

	}

?>