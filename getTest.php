<?php
$arr = $_GET;

foreach($arr as $key => $val) {
	echo "key = " . $key . "<br/>";
	echo "value = " . $val . "<br/>";
}

print_r($_GET);
