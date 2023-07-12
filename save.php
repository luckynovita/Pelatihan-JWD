<?php
// var_dump($_POST);
// die;
$name = $_POST["name"];
$email = $_POST["email"];
$nohp = $_POST["nohp"];
$metode =$_POST["metode"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rumah_peduli";

// create database
$conn = mysqli_connect ($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO donasi (id, nama, email, nohp, metode) VALUES ('', '$name', '$email', '$nohp', '$metode')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  header("Location: http://localhost/DTS/");
?>
