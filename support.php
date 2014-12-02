<?php
	//Include the main page
	include("rec/main.php");
	
	//Set the page title
	$title = "Ligerbots Support";
	
	//Load the header
	include("rec/header.php");
?>

<h1><center>Please Support the Ligerbots</center></h1>

<form style="text-align: center;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input style="width: 147px; background: none;" type="image" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"><br>
<input type="hidden" name="cmd" value="_s-xclick"><br>
<input type="hidden" name="hosted_button_id" value="96XCVCBLCXFEA"><br>
</form>

<p>This has been the best year yet for the Ligerbots. In the 2014, we:
<ul>
<li>Won the WPI District Competition</li>
<li>Finished on the 2nd Alliance at the Northeastern District Competition</li>
<li>Entered the Regional Championships at BU ranked 8th in New England</li>
<li>Invited to and attended the World Championships in St. Louis</li>
</ul>
We plan to make the coming 2015 competition even better.</p>

<p><b>Now's your chance to support the future engineers and entrepreneurs of Massachusetts.</b> FIRST FRC is a fantastic program promoting STEM education, 
but building the robot and attending the competitions is quite expensive. Please consider donating to support the Ligerbots in their quest to return to the World Championships.</p>

<p>Donations are handled through the Newton Schools Foundation.*</p>

<p>If you do not wish to donate via PayPal, you can phone or send a check to the <a href="http://www.newtonschoolsfoundation.org/support/support-overview.html">Newton Schools Foundation</a>; 
please make sure to write "Ligerbots" on the check memo to designate the donation for the Ligerbots.</p>

<p><small>*The Newton Schools Foundation is registered as a 501(c)(3) non-profit organization. 
Contributions to the Newton Schools Foundation are tax-deductible to the extent permitted by law.</small></p>

<?php
	//Include the footer
	include("rec/footer.php");
?>