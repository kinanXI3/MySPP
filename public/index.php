<?php
session_start();
require_once "../core/Url.php";
$url = new Url();
include "../core/functions.php";
$url->run();

/*$conn = mysqli_connect("localhost", "root", "", "db_spp");

$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT); // PAKAI admin123
$level = 1;

$sql = "INSERT INTO petugas (username, password, level) VALUES ('$username', '$password', '$level')";
if (mysqli_query($conn, $sql)) {
    echo "Berhasil insert user!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>*/


