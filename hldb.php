<?php

require "../configure.php";

$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

print "Server found <br/>";

	$database = "URL_test";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) {

		$SQL = "SELECT * FROM url_list";
		$result = mysqli_query($db_handle, $SQL);
		print_r($result);
		while ($db_field = mysqli_fetch_assoc($result)) {

			foreach($db_field as $val) {
				echo $val . "<br/>";
			}

		}

	} else {

		print "Database not found";

	}

?>