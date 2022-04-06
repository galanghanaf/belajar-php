<?php
$hostname = "localhost";
$database = "kelompok3";
$username = "galang";
$password = "galang";
$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
	die("Koneksi Tidak Berhasil : " . mysqli_connect_error());
}
