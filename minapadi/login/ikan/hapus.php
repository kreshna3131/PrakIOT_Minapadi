<?php
// include database connection file
include "../fungsi.php";

// Get id from URL to delete that user
$id = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM tb_set_poin WHERE id_ikan=$id");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location: indexikan.php");
?>
