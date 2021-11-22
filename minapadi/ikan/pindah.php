<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 950px
        }

        .card {
            margin-top: 10px;
        }
    </style>
    <title>Minapadi</title>
</head>



<body>
    <div class="mx-auto">
        <div class="container">
            <div class="row">
                    <div class="col-md">
                         <h1 class="text-center">MinaPadi</h1>
                    </div>
            </div>
        </div>
       
<!-- untuk mengeluarkan data -->
        <a href="../indexlogin.php"><button type="button" class="btn btn-primary">Dashboard</button></a>
         <a href="tambah2.php"><button type="button" class="btn btn-success">Tambah Data</button></a>
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Ikan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Ph</th>
                            <th scope="col">Suhu</th>
                            <th scope="col">Ketinggian Air</th>
                              <th scope="col">Waktu Input</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
    <?php
        include "../fungsi.php";
            $no = 1;
            $data = mysqli_query($conn,"SELECT * FROM tb_set_poin");
        while($r = mysqli_fetch_array($data)){
            $id_ikan = $r['id_ikan'];
            $nama_ikan = $r['nama_ikan'];
            $ph = $r['ph'];
            $suhu = $r['suhu'];
            $ketinggian_air = $r['ketinggian_air'];
            $waktu_input = $r['waktu_input'];
    ?>
        <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <td scope="row"><?php echo $nama_ikan ?></td>
            <td scope="row"><?php echo $ph ?></td>
            <td scope="row"><?php echo $suhu ?></td>
            <td scope="row"><?php echo $ketinggian_air ?></td>
            <td scope="row"><?php echo $waktu_input ?></td>
            <td scope="row">
            <a href="edit2.php?id=<?php echo $id_ikan ?>"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="hapus.php?id=<?php echo $id_ikan?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Hapus</button></a>            
            </td>
        
        </tr>
    <?php
        }
    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>