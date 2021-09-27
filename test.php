<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "suryagretaweddingdb";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if($conn){
    echo "Connection Successfull";
}
else{
    echo "Connection Failed";
}
?>