<?php
$fullname = $_POST["nama_lengkap"];
$emailaddress = $_POST["email"];
$notlp = $_POST["notlp"];
$pekerjaan = $_POST["pekerjaan"];
$alamat = $_POST["alamat"];
$agama = $_POST["agama"];
$pengalaman = $_POST["pengalaman"];
$ktp = $_FILES["ktp"]["name"];
$foto = $_FILES["foto"]["name"];

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

$sql = "INSERT INTO relawan (id, nama_lengkap, email, notlp, pekerjaan, alamat, agama, pengalaman, ktp, foto) VALUES ('', '$fullname', '$emailaddress', '$notlp', '$pekerjaan', '$alamat', '$agama', '$pengalaman', '$ktp', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  header("Location: http://localhost/DTS/");
?>
