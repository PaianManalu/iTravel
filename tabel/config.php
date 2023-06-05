<?php
$server="localhost";
$user="root";
$password = "";
$nama_database = "tabel";
$db = mysqli_connect($server,$user,$password,$nama_database);
if (!$db){
    die("Error connecting: " . mysqli_connect_errno());
} else {
    echo "conected";
}
?>