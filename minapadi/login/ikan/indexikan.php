<?php
//koneksi
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="30" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="mdi-font/css/material-design-iconic-font.css">
  <link rel="stylesheet" href="mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="mdi-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.4.95/css/materialdesignicons.min.css">
  <title>MinaPadi</title>

</head>

<body>

  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#" style="color: white;">MINAPADI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- top navigation bar -->
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-light">
        <ul class="navbar-nav">
          <br>
          <li>
            <a href="../indexlogin.php" class="side nav-link px-3 active">
              <span class="mdi mdi-home-modern mdi-light"></span>
              <span class="side">Dashboard</span>
            </a>
          </li>
          <li>
            <a class="side nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#llayouts">
              <span class="side me-2"><i class="mdi mdi-widgets"></i></span>
              <span class="side">Pemantauan</span>
              <span class="side ms-auto">
                <span class="side right-icon">
                  <i class="side bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="side collapse" id="llayouts">
              <ul class="side navbar-nav ps-3">
                <li>
                  <a href="../dashboardikannila/ikan_nila.php" class="side nav-link px-3">
                    <span class="mdi mdi-fish mdi-light"></span>
                    <span class="side">Ikan Nila</span>
                  </a>
                </li>
                <li>
                  <a href="../dashboardikanlele/ikan_lele.php" class="side nav-link px-3">
                    <span class="mdi mdi-fish mdi-light"></span>
                    <span class="side">Ikan Lele</span>
                  </a>
                </li>
                <li>
                  <a href="../dashboardikanmujair/ikan_mujair.php" class="side nav-link px-3">
                    <span class="mdi mdi-fish mdi-light"></span>
                    <span class="side">Ikan Mujair</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="side nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
              <span class="side me-2"><i class="mdi mdi-database"></i></span>
              <span class="side">Data</span>
              <span class="side ms-auto">
                <span class="side right-icon">
                  <i class="side bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="side collapse" id="layouts">
              <ul class="side navbar-nav ps-3">
                <li>
                  <a href="indexikan.php" class="side nav-link px-3">
                    <span class="mdi mdi-folder-upload mdi-light"></span>
                    <span class="side">Ikan</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="../keteranganlogin.php" class="side nav-link px-3">
              <span class="side me-2"><i class="side bi bi-graph-up"></i></span>
              <span class="side">Keterangan</span>
            </a>
            <a href="../logout.php" class="side nav-link px-3">
              <span class="side me-2"><i class="side bi bi-box-arrow-right"></i></span>
              <span class="side">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <br>
          <div class="mx-auto">
            <div class="container">
              <div class="row">
                <div class="col-md">
                  <h1 class="text-center">MinaPadi</h1>
                </div>
              </div>
            </div>

            <a href="tambah.php"><button type="button" class="btn btn-danger mb-3">Tambah Data</button></a>
            <div class="card">
              <div class="card-header text-white bg-success">
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
                    $data = mysqli_query($conn, "SELECT * FROM tb_set_poin");
                    while ($r = mysqli_fetch_array($data)) {
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
                          <a href="edit.php?id=<?php echo $id_ikan ?>"><button type="button" class="btn btn-warning" style="margin-right: 10px !important;">Edit</button></a>
                          <a href="hapus.php?id=<?php echo $id_ikan ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Hapus</button></a>
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
        </div>
      </div>



  </main>
  <script src="../.././js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../.././js/jquery-3.5.1.js"></script>
  <script src="../.././js/jquery.dataTables.min.js"></script>
  <script src="../.././js/dataTables.bootstrap5.min.js"></script>
  <script src="../.././js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>