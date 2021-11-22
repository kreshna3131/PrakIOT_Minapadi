<?php
include '../fungsi.php';

global $conn;

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_ikan = $_POST['id_ikan'];
    $waktu = $_POST['waktu'];
    // $ph = $_POST['ph'];
    $ph_setelah = $_POST['ph_baru'];
    $total = $_POST['total_ph_baru'];
    $aksi = $_POST['aksi'];
    $waktu_aksi = $_POST['waktu_aksi'];

    $query = "UPDATE tb_ph SET id_ikan = '$id_ikan', waktu = '$waktu', ph = '$total', ph_setelah= '$ph_setelah', aksi = '$aksi', waktu_aksi = '$waktu_aksi' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>
            alert('Data Berhasil Ditambah !');
            window.location.href='ikan_nila.php';
        </script>";
    }
}

?>