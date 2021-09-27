<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "suryagretaweddingdb";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if(mysqli_connect_error()){
    echo 'Connection  Failed';
    die('Connect Error('. mysqli_connect_errno(). ')' . mysqli_connect_error());
}
else{
    echo "Connection Successfull"; 
    $query = "INSERT into pesan (nama,email,pesan) VALUES ('$nama', '$email', '$pesan')";
    if ($conn->query($query)){
        echo 'Data Inserted';
        header('index.html');
    }
    else{
        echo 'Data Not Inserted';
    }
    $conn->close(); 
}




?>