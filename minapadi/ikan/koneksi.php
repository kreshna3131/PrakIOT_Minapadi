<?php
// isi nama host, username mysql, dan password mysql anda
$konek = mysqli_connect("localhost","root","");

// isikan dengan nama database yang akan di hubungkan
$database = mysqli_select_db($konek, "db_minapadi");
?>
