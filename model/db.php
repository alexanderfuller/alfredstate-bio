<?php
$con=mysqli_connect('localhost','root','') or die(mysql_error());
	mysqli_select_db($con,'alexdb') or die("cannot select DB");
	?>