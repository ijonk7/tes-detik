<?php
function getCode() {
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';

	for ($i = 0; $i < 7; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}
?>