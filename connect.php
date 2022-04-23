<?php
	$conn = mysqli_connect('localhost','root','','reg_tul');    
	if (!$conn) {
		die('ERROR CONNECT TO DATA BASE');
		echo 'diecon';
	}	

	