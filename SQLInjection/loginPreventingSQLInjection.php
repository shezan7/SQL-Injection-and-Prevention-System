<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "students";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n". $conn->error);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $uname, $pass);
$stmt->execute();
$result = $stmt->get_result();
$check = $result->fetch_assoc();

if ($check) {
    echo '<h1>Connection is successful</h1>';
} else {
    echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}

$stmt->close();
$conn->close();

?>
