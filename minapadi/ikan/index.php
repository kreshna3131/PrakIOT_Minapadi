<html>
<head>
 <title>Minapadi CRUD</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="font-family:arial">
 <center><h2>Minapadi</h2></center>
 <hr />
 <a href="tambah.php">+ Tambah Ikan</a><br /><br />
 <b>Data Ikan</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Nama Ikan</th>
   <th>PH</th>
   <th>Suhu</th>
   <th>ketinggian_air</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>

  <?php
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from tb_set_poin");
  while($r = mysqli_fetch_array($data)){
   $id_ikan = $r['id_ikan'];
   $nama_ikan = $r['nama_ikan'];
   $ph = $r['ph'];
   $suhu = $r['suhu'];
   $ketinggian_air = $r['ketinggian_air'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $nama_ikan; ?></td>
   <td><?php echo $ph; ?></td>
   <td><?php echo $suhu; ?></td>
  <td><?php echo $ketinggian_air; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id_ikan;?>">Edit</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_ikan;?>">Hapus</a></td>
  </tr>

  <?php
  }
  ?>
 </table>
 <a href="../index.php">Menuju ke Halaman Awal</a>
</body>
</html>
