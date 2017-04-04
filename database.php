<?php

require "../configure.php";

	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

	print "Server found" . "<br/>";

	$database = "addressbook";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) {

		$SQL = "SELECT * FROM tbl_address_book";
		$result = mysqli_query($db_handle, $SQL);

		while ($db_field = mysqli_fetch_assoc($result)) {

			print $db_field["ID"] . "<br/>";
			print $db_field["First_Name"] . "<br/>";
			print $db_field["Surname"] . "<br/>";
			print $db_field["Address"] . "<br/>";

		}

	}

	else {

		print "Databse not found";

	}

?>