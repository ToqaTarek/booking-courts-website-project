<?php

$con = mysqli_connect("localhost","root","") or die ("Error: can't connect to Server");
$db = mysqli_select_db($con, "booking_courts_db") or die ("Error: can't connect to Database");

?>