<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM section" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Id</th><th>Name</th> <th>Faculty</th> <th>Room</th> <th>Delete</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $name </td>";
		echo "<td> $faculty </td>";
        echo "<td> $room </td>";
		echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>