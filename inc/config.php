<?php
//connect to db
$dbname='absenujian' ;


$con = mysqli_connect("localhost","root","",$dbname);

// Check connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
	}
?>