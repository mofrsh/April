<?php

if (isset($_POST['checkmail'])) {
	if (isset($_POST['email'])) {
		//make DB COnnection after u confirm email content
		require('DBConnection.php');

		$email = $_POST['email'];

		//make DB query
		$query = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'";
		$res = $db->query($query);
		$numRws = $res->num_rows;

		if ($numRws == 1) {
			echo 1; //exists
		} else {
			echo 2; //available
		}
		
	}
} 
    ?>