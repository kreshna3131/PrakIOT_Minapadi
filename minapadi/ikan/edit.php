<?php
// include database connection file
include "koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $nama_ikan=$_POST['nama_ikan'];
    $ph=$_POST['ph'];
    $suhu=$_POST['suhu'];
    $ketinggian_air=$_POST['ketinggian_air'];

    // update user data
    $result = mysqli_query($konek, "UPDATE tb_set_poin SET nama_ikan='$nama_ikan',ph='$ph',suhu='$suhu',ketinggian_air='$ketinggian_air' WHERE id_ikan=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($konek, "SELECT * FROM tb_set_poin WHERE id_ikan=$id");

while($r = mysqli_fetch_array($result))
{
    $nama_ikan = $r['nama_ikan'];
    $ph = $r['ph'];
    $suhu = $r['suhu'];
    $ketinggian_air = $r['ketinggian_air'];
}
?>


<html>
<head>
 <title>Edit Ikan</title>
</head>
<body style="font-family:arial">
 <center><h2>Minapadi</h2></center>
 <hr />
 <b>Edit Ikan</b>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama ikan</td>
                <td><input type="text" size="50" name="nama_ikan" value="<?php echo $nama_ikan;?>"></td>
            </tr>
            <tr>
                <td>Ph</td>
                <td><input type="text" size="50" name="ph" value="<?php echo $ph;?>"></td>
            </tr>
            <tr>
                <td>Suhu</td>
                <td><input type="text" size="50" name="suhu" value="<?php echo $suhu;?>"></td>
            </tr>
            <tr>
                <td>Ketinggian Air</td>
                <td><input type="text" size="50" name="ketinggian_air" value="<?php echo $ketinggian_air;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
