<?php
//koneksi
session_start();
include "../fungsi.php";

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
                  <a href="ikan_nila.php" class="side nav-link px-3">
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
                  <a href="../ikan/indexikan.php" class="side nav-link px-3">
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
              <span class="side">Login</span>
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
          <h4>Pemantauan Ikan Nila</h4>
          <br>
          <!-- Alert Ph -->
          <?php $queryph = mysqli_query($conn, "SELECT * FROM tb_ph WHERE id_ikan = 1 ORDER BY id DESC LIMIT 1");
          while ($fetch = mysqli_fetch_array($queryph)){
            $nilaiph = $fetch['ph'];
          } ?>
          <?php if ($nilaiph > 7.4) { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> PH Melebihi batas maksimal
            <button  type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
          </div>
          <?php
           }
          ?>

          <?php $queryph = mysqli_query($conn, "SELECT * FROM tb_ph WHERE id_ikan = 1 ORDER BY id DESC LIMIT 1");
          while ($fetch = mysqli_fetch_array($queryph)){
            $nilaiph = $fetch['ph'];
          } ?>
          <?php if ($nilaiph < 6.6) { ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> PH Dibawah batas minimum
            <button  type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
          </div>
          <?php
           }
          ?>

          <!-- Alert Tinggi Air -->
          <?php $querytinggi = mysqli_query($conn, "SELECT * FROM tb_tinggi_air WHERE id_ikan = 1 ORDER BY id_tinggi_air DESC LIMIT 1");
          while ($fetch1 = mysqli_fetch_array($querytinggi)){
            $nilaitinggi = $fetch1['tinggi_air'];
          } ?>
          <?php if ($nilaitinggi > 50) { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> Tinggi Air Melebihi batas maksimal
            <button  type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
          </div>
          <?php
           }
          ?>

          <?php $querytinggi = mysqli_query($conn, "SELECT * FROM tb_tinggi_air WHERE id_ikan = 1 ORDER BY id_tinggi_air DESC LIMIT 1");
          while ($fetch1 = mysqli_fetch_array($querytinggi)){
            $nilaitinggi = $fetch1['tinggi_air'];
          } ?>
          <?php if ($nilaitinggi < 35) { ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> Tinggi Air Dibawah batas minimum
            <button  type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
          </div>
          <?php
           }
          ?>

          <!-- Alert Suhu -->
          <?php $querysuhu = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ikan = 1 ORDER BY id_suhu DESC LIMIT 1");
          while ($fetch2 = mysqli_fetch_array($querysuhu)){
            $nilaisuhu = $fetch2['suhu'];
          } ?>
          <?php if ($nilaisuhu > 28) { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> Suhu Melebihi batas maksimal
            <button  type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
          </div>
          <?php
           }
          ?>

          <?php $querysuhu = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ikan = 1 ORDER BY id_suhu DESC LIMIT 1");
          while ($fetch2 = mysqli_fetch_array($querysuhu)){
            $nilaisuhu = $fetch2['suhu'];
          } ?>
          <?php if ($nilaisuhu < 25) { ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> Suhu Dibawah batas minimum
            <button  type="button" class="btn-close" data-dismiss="alert" aria-label="close"> </button>
          </div>
          <?php
           }
          ?>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <a href="#Ph" data-toggle="modal">
            <div class="overview-item overview-item--c1">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <span class="mdi mdi-ph mdi-48px"></span>
                  </div>
                  <div class="text">
                    <span>PH Air</span>
                    <h2>
                      <?php $result1 = mysqli_query($conn, "SELECT * FROM tb_ph WHERE id_ikan = 1 ORDER BY id DESC LIMIT 1"); ?>
                      <?php foreach ($result1 as $row) : ?>
                        <?= $row['ph']; ?>
                      <?php endforeach;
                      ?>
                    </h2>

                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart"></canvas>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="#TinggiAir" data-toggle="modal">
            <div class="overview-item overview-item--c2">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <span class="mdi mdi-waves-arrow-up mdi-48px"></span>
                  </div>
                  <div class="text">
                    <span>Tinggi Air</span>
                    <h2>
                      <?php $result2 = mysqli_query($conn, "SELECT * FROM tb_tinggi_air WHERE id_ikan = 1 ORDER BY id_tinggi_air DESC LIMIT 1"); ?>
                      <?php foreach ($result2 as $row) : ?>
                        <?= $row['tinggi_air']; ?>
                      <?php endforeach;
                      ?>
                      cm
                    </h2>

                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart"></canvas>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="#SuhuAir" data-toggle="modal">
            <div class="overview-item overview-item--c3">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <span class="mdi mdi-thermometer-alert mdi-48px"></span>
                  </div>
                  <div class="text">
                    <span>Suhu Air</span>
                    <h2>
                      <?php $result = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ikan = 1 ORDER BY id_suhu DESC LIMIT 1"); ?>
                      <?php foreach ($result as $row) : ?>
                        <?= $row['suhu']; ?>
                      <?php endforeach;
                      ?>
                      °C
                    </h2>
                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart"></canvas>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- modal 2 -->
      <div class="row">
        <div class="col">
          <div class="modal fade" id="phair" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="smallmodalLabel">PH Air</h5>
                  <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prosesinputph.php" method="post" style="margin-left: 10px; margin-right: 10px">
                  <div class="mt-2">
                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_ph WHERE id_ikan = 1 ORDER BY id DESC LIMIT 1"); ?>
                      <?php foreach ($result as $row) : ?>
                        <label for="" class="form-label">ID</label>
                        <input type="text" name="id" id="id" class="form-control" value="<?= $row['id']; ?>" readonly>
                        <label for="" class="form-label">ID_Ikan</label>
                        <input type="text" name="id_ikan" id="id_ikan" class="form-control" value="<?= $row['id_ikan']; ?>" readonly>
                        <label for="" class="form-label">Waktu Sensor</label>
                        <input type="text" name="waktu" id="waktu" class="form-control" value="<?= $row['waktu']; ?>" readonly>
                        <label for="" class="form-label">PH Air</label>
                        <input type="text" name="phh" id="phh" class="form-control" value="<?= $row['ph']; ?>" readonly>
                        <label for="" class="form-label">Perbarui PH Air</label>
                        <input type="text" name="ph_baru" id="ph_baru" class="form-control">
                        <label for="" class="form-label">Total PH baru</label>
                        <input type="text" name="total_ph_baru" id="total_ph_baru" class="form-control">
                        <label for="" class="form-label">Aksi</label>
                        <input type="text" name="aksi" id="aksi" class="form-control">
                        <label for="" class="form-label">Waktu Aksi</label>
                        <input type="datetime-local" name="waktu_aksi" id="waktu_aksi" class="form-control">
                        <?php endforeach; ?>
                      </div>
                      <button type="submit" name="edit" id="edit" class="btn btn-primary mb-2 mt-3">Kirim</button>
                    </form>
                  </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="modal fade" id="tinggiair" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="smallmodalLabel">Tinggi Air</h5>
                  <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prosesinputtinggiair.php" method="post" style="margin-left: 10px; margin-right: 10px">
                  <div class="mt-2">
                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_tinggi_air WHERE id_ikan = 1 ORDER BY id_tinggi_air DESC LIMIT 1"); ?>
                    <?php foreach ($result as $row) : ?>
                      <label for="" class="form-label">ID</label>
                      <input type="text" name="id_tinggi_air" id="id_tinggi_air" class="form-control" value="<?= $row['id_tinggi_air']; ?>" readonly>
                      <label for="" class="form-label">ID_Ikan</label>
                      <input type="text" name="id_ikan" id="id_ikan" class="form-control" value="<?= $row['id_ikan']; ?>" readonly>
                      <label for="" class="form-label">Waktu Sensor</label>
                      <input type="text" name="waktu" id="waktu" class="form-control" value="<?= $row['waktu']; ?>" readonly>
                      <label for="" class="form-label">Ketinggian Air</label>
                      <input type="text" name="tinggi_air" id="tinggi_air" class="form-control" value="<?= $row['tinggi_air']; ?>" readonly>
                      <label for="" class="form-label">Perbarui Ketinggian Air</label>
                      <input type="text" name="tinggi_baru" id="tinggi_baru" class="form-control">
                      <label for="" class="form-label">Total Ketinggian baru</label>
                      <input type="text" name="total_tinggi_baru" id="total_tinggi_baru" class="form-control">
                      <label for="" class="form-label">Aksi</label>
                      <input type="text" name="aksi" id="aksi" class="form-control">
                      <label for="" class="form-label">Waktu Aksi</label>
                      <input type="datetime-local" name="waktu_aksi" id="waktu_aksi" class="form-control">
                      <?php endforeach; ?>
                    </div>
                  <button type="submit" name="edit" id="edit" class="btn btn-primary mb-2 mt-3">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="modal fade" id="suhuair" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="smallmodalLabel">Suhu Air</h5>
                  <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="prosesinputsuhu.php" method="post" style="margin-left: 10px; margin-right: 10px">
                  <div class="mt-2">
                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ikan = 1 ORDER BY id_suhu DESC LIMIT 1"); ?>
                    <?php foreach ($result as $row) : ?>
                      <label for="" class="form-label">ID</label>
                      <input type="text" name="id_suhu" id="id_suhu" class="form-control" value="<?= $row['id_suhu']; ?>" readonly>
                      <label for="" class="form-label">ID_Ikan</label>
                      <input type="text" name="id_ikan" id="id_ikan" class="form-control" value="<?= $row['id_ikan']; ?>" readonly>
                      <label for="" class="form-label">Waktu Sensor</label>
                      <input type="text" name="waktu" id="waktu" class="form-control" value="<?= $row['waktu']; ?>" readonly>
                      <label for="" class="form-label">Suhu Air</label>
                      <input type="text" name="suhu" id="suhu" class="form-control" value="<?= $row['suhu']; ?>" readonly>
                      <label for="" class="form-label">Perbarui Suhu Air</label>
                      <input type="text" name="suhu_baru" id="suhu_baru" class="form-control">
                      <label for="" class="form-label">Total Kesuhuan Suhu baru</label>
                      <input type="text" name="total_suhu_baru" id="total_suhu_baru" class="form-control">
                      <label for="" class="form-label">Aksi</label>
                      <input type="text" name="aksi" id="aksi" class="form-control">
                      <label for="" class="form-label">Waktu Aksi</label>
                      <input type="datetime-local" name="waktu_aksi" id="waktu_aksi" class="form-control">
                      <?php endforeach; ?>
                    </div>
                  <button type="submit" name="edit" id="edit" class="btn btn-primary mb-2 mt-3">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Ph" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel">PH Air</h5>
            <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" style="margin-left: 10px; margin-right: 10px">
            <p>PH Air Saat Ini
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_ph WHERE id_ikan = 1 ORDER BY id DESC LIMIT 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['ph']; ?>
                <?php endforeach;
                ?>
              </b>
            </p>
            <p>PH Air Normal Adalah
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['ph']; ?>
                <?php endforeach;
                ?>
              </b>
            </p>
            <button class="btn btn-primary mb-2"><a data-dismiss="modal" data-toggle="modal" href="#phair" style="text-decoration: none; color: white;">Aksi</a></button>
          </form>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="TinggiAir" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header" id="header">
            <h5 class="modal-title" id="smallmodalLabel">Tinggi Air</h5>
            <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" style="margin-left: 10px;">
            <p>Tinggi Air Saat Ini
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_tinggi_air WHERE id_ikan = 1 ORDER BY id_tinggi_air DESC LIMIT 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['tinggi_air']; ?>
                <?php endforeach;
                ?>
                cm
              </b>
            </p>
            <p>Tinggi Air Normal Adalah
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['ketinggian_air']; ?>
                <?php endforeach;
                ?>
                cm
              </b>
            </p>
            <button class="btn btn-primary mb-2"><a data-dismiss="modal" data-toggle="modal" href="#tinggiair" style="text-decoration: none; color: white;">Aksi</a></button>
          </form>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="SuhuAir" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="smallmodalLabel">Suhu Air</h5>
            <button type="button" class="btn-close float-end" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" style="margin-left: 10px;">
            <p>Suhu Air Saat Ini
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_suhu WHERE id_ikan = 1 ORDER BY id_suhu DESC LIMIT 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['suhu']; ?>
                <?php endforeach;
                ?>
              </b>
            </p>
            <p>Suhu Air Normal Adalah
              <b>
                <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 1"); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['suhu']; ?>
                <?php endforeach;
                ?>
                °C
              </b>
            </p>
            <button class="btn btn-primary mb-2"><a data-dismiss="modal" data-toggle="modal" href="#suhuair" style="text-decoration: none; color: white;">Aksi</a></button>
          </form>
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
