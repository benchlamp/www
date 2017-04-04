<?php

require "../configure.php";

$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

print "Server found <br/>";

	$database = "URL_test";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) {

			$SQL = "INSERT INTO url_list (URL)
			VALUES ('http://www.reddit.com')";

			$result = mysqli_query($db_handle, $SQL);

			mysqli_close($db_handle);

			print "Records added";

		

	} else {

		print "Database not found";

	}

?>