<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

	$name = $_GET["name"];

	$faculty = $_GET["faculty"];

	$room = $_GET["room"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

		$query ="INSERT INTO section (name, faculty, room) VALUES ('$name', '$faculty', '$room')";

		mysqli_query($connect,$query);



	// mysqli_query( $connect, "INSERT INTO section VALUES ( '', '$name', '$faculty','$room' )" )

	// 	or die("Can not execute query");



	echo "Record inserted:<br> name = $name <br> faculty = $faculty <br> room = $room ";



	echo "<p><a href=section_read.php>READ all records</a>";

?>