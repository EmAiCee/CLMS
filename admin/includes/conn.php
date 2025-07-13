<?php
	$conn = new mysqli('localhost', 'root', 'Mic2002.', 'libsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>