<?php
	//Include the main page
	include("rec/main.php");
	
	//Set the page title
	$title = "Carpools";
		
	//Load the header
	include("rec/header.php");
	
	//If the user is an editor, give them the option to add another carpool
	$eform = "";
	if($user['editor']) {
		$eform = '<form action="rec/func/addcarpool.php" method="post">';
		$eform .= 'Enter ID of carpool to add:<br>';
		$eform .= '<input type="text" name="id"><input type="submit" value="Add carpool"></form><p>';
	}
	
	//Formulate the query
	$query = "SELECT * FROM " . $carpool_table;
	//Execute the query
	$result = mysqli_query($connection, $query);
	//add the results to an array
	$carpools = array();
	$i = 0;
	while($row = mysqli_fetch_array($result)) {
		$carpools["POS" . $i] = $row['id'];
		$i++;
	}
	//Flip the result array
	//$carpools = array_reverse($carpools);
?>

<center><h1>Meeting Carpools</h1>
<h3>Mondays: 6:30-8:30 South Room: 9170<br>Thursdays: 3:30-5:00 North Room: 139</h3>
<h4>Scroll down for more carpools</h4></center>

<script language="JavaScript">
function autoResize(id)
{
    var newheight;

    if(document.getElementById)
		{
			newheight=document.getElementById(id).Height;
			console.log(newheight)
        }

    document.getElementById(id).height= (newheight) + "px";
}
</script>

<?php
	//Echo the carpool adder if applicable
	echo($eform);
	//Print out the carpools
	$i = 0;
	foreach($carpools as $carpool) {
		if($i < 5) {
			echo('<iframe src="http://www.groupcarpool.com/t/' . $carpool . '" class="carpool" id="' . $carpool . '" ;">></iframe>');
			//echo('<object data="http://www.groupcarpool.com/t/' . $carpool . '" class="carpool" id="' . $carpool . '" onLoad="autoResize(' . "'" . $carpool . "'" . ');"></object>');
			/*echo("<div>");
			$remote = fopen("http://www.groupcarpool.com/t/" . $carpool, "r");
			fpassthru($remote);
			echo("</div>");
			*/
		}
		$i++;
	}
	//Include the footer
	include("rec/footer.php");
	
	//onLoad="autoResize(' . "'" . $carpool . "'" . ')
?>