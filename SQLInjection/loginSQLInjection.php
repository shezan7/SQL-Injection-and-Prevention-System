<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "students";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);




$uname = $_POST['uname'];
$pass = $_POST['pass'];
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
	echo '<h1>Connection is successful</h1>';
}
else {
	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}

?>