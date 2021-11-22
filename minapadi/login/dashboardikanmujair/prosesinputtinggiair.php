<?php
include '../fungsi.php';

global $conn;

if (isset($_POST['edit'])) {
    $id = $_POST['id_tinggi_air'];
    $id_ikan = $_POST['id_ikan'];
    $waktu = $_POST['waktu'];
    $tinggi_air = $_POST['tinggi_air'];
    $tinggi_air_setelah = $_POST['tinggi_baru'];
    $total = $_POST['total_tinggi_baru'];
    $aksi = $_POST['aksi'];
    $waktu_aksi = $_POST['waktu_aksi'];

    $query = "UPDATE tb_tinggi_air SET id_ikan = '$id_ikan', waktu = '$waktu', tinggi_air = '$total', tinggi_air_setelah= '$tinggi_air_setelah', aksi = '$aksi', waktu_aksi = '$waktu_aksi' WHERE id_tinggi_air = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>
            alert('Data Berhasil Ditambah !');
            window.location.href='ikan_mujair.php';
        </script>";
    }
}

?>