<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rumah_peduli";

$conn = mysqli_connect ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

function save($data){
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $nohp = $data["nohp"];
    $metode =$data["metode"];

    $sql = "INSERT INTO donasi (id, nama, email, nohp, metode) VALUES ('', '$name', '$email', '$nohp', '$metode')";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function saveRelawan($data){
    global $conn;

    $fullname = $data["nama_lengkap"];
    $emailaddress = $data["email"];
    $notlp = $data["notlp"];
    $pekerjaan = $data["pekerjaan"];
    $alamat = $data["alamat"];
    $agama = $data["agama"];
    $pengalaman = $data["pengalaman"];
    
    $ktp = upload('ktp');
    $foto = upload('foto');
    if (!$ktp || !$foto) {
        return false;
    }

    $sql = "INSERT INTO relawan (id, nama_lengkap, email, notlp, pekerjaan, alamat, agama, pengalaman, ktp, foto) VALUES ('', '$fullname', '$emailaddress', '$notlp', '$pekerjaan', '$alamat', '$agama', '$pengalaman', '$ktp', '$foto')";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function upload($file){
    $namaFile = $_FILES[$file]["name"];
    $ukuranFile = $_FILES[$file]["size"];
    $error = $_FILES[$file]["error"];
    $tmpName = $_FILES[$file]["tmp_name"];

    if ($error === 4) {
        echo "<script>alert('Gambar Wajib Di Upload');</script>";
        return false;
    }

    $ekstensiGambar = ["jpg", "jpeg", "png"];
    $formatFile = explode(".", $namaFile);
    $formatFile = strtolower(end($formatFile));

    if (!in_array($formatFile, $ekstensiGambar)) {
        echo "<script>alert('Yang Di Upload Bukan Gambar !');</script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>alert('Gambar yang diupload terlalu besar');</script>";
        return false;
    }

    $encNamaFile = uniqid() . '.' . $formatFile;
    move_uploaded_file($tmpName, 'gambar/' . $encNamaFile);
    return $encNamaFile;
}

function login($data) {
    global $conn;

    $user = $data['username'];
    $pw = $data['password']; //Data password inputan dari form login

    $sql = "SELECT * FROM user WHERE username = '$user'";
    $login = mysqli_query($conn, $sql);

    if (mysqli_num_rows($login) === 1) { //Ngecek apakah username nya ada di database
        
        $dataPW = mysqli_fetch_assoc($login); //Ngambil data password user dari Ddatabse
        if ($pw == $dataPW['password']) {
            echo "<script>alert('Halo Selamat Datang ^_^'); document.location.href='home.php';</script>";
        }

        echo "<script>let alertG = document.getElementById('gagal'); alertG.style.display = 'block';</script>";
    }
    
    echo "<script>let alertG = document.getElementById('gagal'); alertG.style.display = 'block';</script>";
}

?>