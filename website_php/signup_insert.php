<?php
$Name = $_POST["Name"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$password = $_POST["password"];

include "config.php";

$insertUser = "INSERT INTO users (Name,Mobile,Email,password) 
value('$Name','$Mobile','$Email','$password')";

$result = mysqli_query($con,$insertUser);
if($result){
	echo "<h1>User Created Successfully</h1>";
	echo "<a href='index_1.php'>Click here to view our page</a>";
}
else {
	die("Error: ".mysqli_error($con));
}
?>