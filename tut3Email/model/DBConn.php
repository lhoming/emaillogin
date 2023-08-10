<?php
//connect to mysql

//$password = trim(file_get_contents("/home/ubuntu/password.txt"));
$mysqli = new mysqli('localhost', 'root', 'Minrekha12345@', 'bibek');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>