<?php

require "../configure.php";

$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);

print "Server found <br/>";

	$database = "addressbook";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) {

			$SQL = "INSERT INTO tbl_address_book (First_Name, Surname, Address)
			VALUES ('Dougal', 'McGuire', 'Craggy Island')";

			$result = mysqli_query($db_handle, $SQL);

			mysqli_close($db_handle);

			print "Records added";

		

	} else {

		print "Database not found";

	}

?>