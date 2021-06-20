<?php

	$conn = mysqli_connect('localhost','id17070828_vinothintern','maxwellDB@123','id17070828_bankdb');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>