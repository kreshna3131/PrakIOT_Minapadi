<?php
//koneksi
session_start();
include "fungsi.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="refresh" content="30" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
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
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#" style="color: white;">MINAPADI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
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
            <a href="indexlogin.php" class="side nav-link px-3 active">
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
                  <a href="dashboardikannila/ikan_nila.php" class="side nav-link px-3">
                    <span class="mdi mdi-fish mdi-light"></span>
                    <span class="side">Ikan Nila</span>
                  </a>
                </li>
                <li>
                  <a href="dashboardikanlele/ikan_lele.php" class="side nav-link px-3">
                    <span class="mdi mdi-fish mdi-light"></span>
                    <span class="side">Ikan Lele</span>
                  </a>
                </li>
                <li>
                  <a href="dashboardikanmujair/ikan_mujair.php" class="side nav-link px-3">
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
                  <a href="ikan/indexikan.php" class="side nav-link px-3">
                    <span class="mdi mdi-folder-upload mdi-light"></span>
                    <span class="side">Ikan</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="keteranganlogin.php" class="side nav-link px-3">
              <span class="side me-2"><i class="side bi bi-graph-up"></i></span>
              <span class="side">Keterangan</span>
            </a>
            <a href="logout.php" class="side nav-link px-3">
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
                <div class="col-md-12" style="margin-bottom: 30px;">
                        <br>
                    <h4>Keterangan</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card text-center overview-item--c2" style="height: 500px;">
                        <div class="card-body">
                            <h1 class="card-title" style="margin-bottom: 20px;">Ikan Nila</h1>
                            <ul class="list-group">
                                <li class="list-group-item">PH Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 1"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['ph']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item">Suhu Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 1"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['suhu']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item">Ketinggian Air Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 1"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['ketinggian_air']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col">
                    <div class="card text-center overview-item--c3" style="height: 500px;">
                        <div class="card-body">
                            <h1 class="card-title" style="margin-bottom: 20px;">Ikan Lele</h1>
                            <ul class="list-group">
                            <li class="list-group-item">PH Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 2"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['ph']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item">Suhu Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 2"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['suhu']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item">Ketinggian Air Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 2"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['ketinggian_air']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center overview-item--c3" style="height: 500px;">
                        <div class="card-body">
                            <h1 class="card-title" style="margin-bottom: 20px;">Ikan Mujair</h1>
                            <ul class="list-group">
                            <li class="list-group-item">PH Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 3"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['ph']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item">Suhu Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 3"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['suhu']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item">Ketinggian Air Ideal</li>
                                <li class="list-group-item">
                                    <?php $result = mysqli_query($conn, "SELECT * FROM tb_set_poin WHERE id_ikan = 3"); ?>
                                    <?php foreach ($result as $row) : ?>
                                        <?= $row['ketinggian_air']; ?>
                                    <?php endforeach;
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src=".././js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src=".././js/jquery-3.5.1.js"></script>
    <script src=".././js/jquery.dataTables.min.js"></script>
    <script src=".././js/dataTables.bootstrap5.min.js"></script>
    <script src=".././js/script.js"></script>
</body>

</html>
