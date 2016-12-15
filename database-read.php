<?php

	include "db-info.php";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	// 2. Perform database query
	//$query  = "SELECT * ";
	//$query .= "FROM pages ";
	//$query .= "WHERE visible = 1 ";
	//$query .= "ORDER BY position ASC";

	$query = "SELECT * FROM contacts ";


	$result = mysqli_query($connection, $query);
	
?>

<?php include 'inc/header.inc' ?>

<?php include 'inc/nav.inc' ?>

<div class="tableArea">
	<table border>

	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Message</th>
	</tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["name"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>
			<td><?php echo $pages["telephone"]; ?></td>
			<td><?php echo $pages["message"]; ?></td>
		</tr>

<?php } ?>

	</table>

	<br>
	<a class="button" href="index.php">Back to the Index</a>

</div>

<?php include'inc/footer.inc' ?>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>