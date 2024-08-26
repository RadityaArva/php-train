<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "buku_tamu";

$db = mysqli_connect($hostname, $username, $password, $dbname);

if($db->connect_error){
    echo "Koneksi Database Rusak";
    die("error");
}

?>