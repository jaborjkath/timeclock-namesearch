<?php

$name = $_POST['name_input'];
$pass = $_POST['passwd_input'];

echo '<body style="font-size: 12pt; font-family: Trebuchet MS">
		<div style="font-size: 12pt; border-radius: 5px; background-color: #F17600; width: 20%; height: 15%; padding: 15px 2px 10px 5px">'.
			'Welcome, <b>'.$name.'</b><br /> <br />
			<small><i>...Have a Great Day! And take care :)</i></small>
		</div>
		<div style="margin-top: -20px; padding-left: 220px">
			<small><a href="main.html">Close</a></small>
		</div>
	  </body>';
?>