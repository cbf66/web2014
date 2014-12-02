<?php
	//Include the main page
	include("rec/main.php");
	
	//Set the page title
	$title = "Ligerbots Directory";
	
	//Must be logged in
	if(!$loggedin) {
		header('Location: login.php?e=login');
		die();
	}
	
	//Must be activated
	if(!$user['activated']) {
		header('Location: login.php?e=denied');
		die();
	}
	
	//Load the header
	include("rec/header.php");
	
	//Formulate the query
	$query = "SELECT * FROM " . $user_table . " ORDER BY lastname, firstname";
	//Execute the query
	$result = mysqli_query($connection, $query);
?>

<script src='rec/script/sorttable.js'></script>

<center>
	<h1>Ligerbots Directory</h1>
	<h5>The information on this page is confidential - It is only available to registered and approved users</h5>
</center>

<?php
while($row = mysqli_fetch_array($result)) {
	echo('
	<div class=Directory_User>
		<img class="directory_user_image" src="img/headshot/image.php?img=' . $row['id'] . '_' . $row['firstname'] . '_' . $row['lastname'] . '.jpg" width="100%">
		<center>
			' . 
				$row['firstname']  . ' ' . $row['lastname']
			. '
		</center>
	</div>
		');	
}
?>
<?php
	//Include the footer
	include("rec/footer.php");
?>