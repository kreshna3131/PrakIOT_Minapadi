<?php
include '../fungsi.php';

global $conn;

if (isset($_POST['edit'])) {
    $id = $_POST['id_suhu'];
    $id_ikan = $_POST['id_ikan'];
    $waktu = $_POST['waktu'];
    $suhu = $_POST['suhu'];
    $suhu_setelah = $_POST['suhu_baru'];
    $total = $_POST['total_suhu_baru'];
    $aksi = $_POST['aksi'];
    $waktu_aksi = $_POST['waktu_aksi'];

    $query = "UPDATE tb_suhu SET id_ikan = '$id_ikan', waktu = '$waktu', suhu = '$total', suhu_setelah= '$suhu_setelah', aksi = '$aksi', waktu_aksi = '$waktu_aksi' WHERE id_suhu = '$id'";
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