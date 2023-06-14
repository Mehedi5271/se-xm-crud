<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

	$id = $_GET["id"];

	$section = $_GET["section"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE student SET section='$section' WHERE id = $id";

	echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");

	echo "<p>Record updated:<br> section = $section <br>";

	echo "<p><a href=student.php>READ all records</a>";

?>