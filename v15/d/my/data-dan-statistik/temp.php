<?php
require('./../conn/mysqli.php');

$data_all = 'SELECT * FROM suhu ORDER BY date DESC';
$data_top = 'SELECT * FROM suhu ORDER BY date DESC LIMIT 10';

$query_all = mysqli_query($db, $data_all);
$query_top = mysqli_query($db, $data_top);
$query_show = mysqli_query($db, $data_all);

$row_show = mysqli_fetch_array($query_show);

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Title -->
  <title>Data dan Statistik | Pendeteksi Suhu</title>

  <!-- Meta Tags -->
  <?php require('../auto/header/metaTag.php'); ?>

  <!-- Icon -->
  <link rel="stylesheet" href="./../../lib/icon/icofont/icofont.min.css">
  <link rel="stylesheet" href="./../../lib/icon/boxicons/css/boxicons.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../../d/res/main.css/theme/style.css">
  <link rel="shortcut icon" href="../../../d/lib/icon/LogoNepal.png">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

</head>

<body>

  <!-- ========== MAIN ========== -->
  <main id="content" role="main" class="bg-light">
    <!-- Breadcrumb Section -->
    <div class="bg-primary">
      <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
        <div class="row align-items-center">
          <div class="col">
            <div class="d-none d-lg-block">
              <h1 class="h2 text-white">Pendeteksi Suhu</h1>
            </div>

            <!-- Breadcrumb -->
            <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
              <li class="breadcrumb-item">My</li>
              <li class="breadcrumb-item">Data dan Statistik</li>
              <li class="breadcrumb-item active" aria-current="page">Pendeteksi Suhu</li>
            </ol>
            <!-- End Breadcrumb -->
          </div>

          <div class="col-auto">
            <?php require('../auto/content/btnLogout.php'); ?>

            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn btn-icon btn-sm rounde-circle d-lg-none" aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse" data-target="#sidebarNav">
              <span class="navbar-toggler-default">
                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                </svg>
              </span>
              <span class="navbar-toggler-toggled">
                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                </svg>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb Section -->

    <!-- Content Section -->
    <div class="container space-1 space-top-lg-0 mt-lg-n10">
      <div class="row">
        <div class="col-lg-3">
          <!-- Navbar -->
          <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
            <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
              <!-- Card -->
              <div class="card mb-5">
                <div class="card-body">

                  <?php require('../auto/content/navDSMenu.php'); ?>

                  <h6 class="text-cap small">Data dan Statistik</h6>

                  <!-- List -->
                  <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">
                        <i class="bx bx-analyse nav-icon bx-xs"></i>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gate.php">
                        <i class="bx bxs-door-open nav-icon bx-xs"></i>
                        Gerbang Rumah
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="lamp.php">
                        <i class="bx bx-bulb nav-icon bx-xs"></i>
                        Lampu Ruangan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="temp.php">
                        <i class="bx bx-wind nav-icon bx-xs"></i>
                        Pendeteksi Suhu
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="watering.php">
                        <i class="bx bxs-tree nav-icon bx-xs"></i>
                        Penyiram Tanaman
                      </a>
                    </li>
                  </ul>
                  <!-- End List -->

                  <?php require('../auto/content/dropLogOut.php'); ?>

                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Navbar -->
        </div>

        <div class="col-lg-9">

          <!-- Card -->
          <div class="card mb-4">
            <!-- Header -->
            <div class="card-header justify-content-center">
              <h5 class="card-header-title">Tabel Statistik</h5>
            </div>
            <!-- End Header -->

            <!-- Alert -->
            <div class="alert alert-soft-danger text-center rounded-0 mb-0" role="alert">
              Halaman ini disegarkan (refresh) secara manual</a>
            </div>
            <!-- End Alert -->

            <!-- Body -->
            <div class="card-body">
              <!-- Nav -->
              <ul class="nav nav-segment nav-fill mb-5" id="menuTabOption" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="main-tab" data-toggle="tab" href="#main" role="tab">Utama</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="lastest-tab" data-toggle="tab" href="#lastest" role="tab">Terbaru</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab">Semua</a>
                </li>
              </ul>
              <!-- End Nav -->

              <!-- Tab Content -->
              <div class="tab-content" id="menuTabOptionContent">
                <div class="tab-pane fade show active" id="main" role="tabpanel" aria-labelledby="main-tab">

                  <div class="card border shadow-none p-4">
                    <div class="row">

                      <div class="text-center col-12 col-md-6 mb-5 mb-md-0">
                        <!-- User Content -->
                        <h1 class="d-inline-flex justify-content-center text-body font-size-5"><?php echo $row_show["temperature"]; ?></h1><sup class="text-body font-size-2 align-text-top">°C</sup>
                        <span class="d-block text-body font-size-1 mt-0">Temperature</span>
                        <!-- End User Content -->
                      </div>

                      <div class="text-center col-12 col-md-6 mb-5 mb-md-0">
                        <!-- User Content -->
                        <h1 class="d-inline-flex justify-content-center text-body font-size-5"><?php echo $row_show["humidity"]; ?></h1>
                        <span class="d-block text-body font-size-1 mt-0">Humidity</span>
                        <!-- End User Content -->
                      </div>

                      <div class="col-12">
                        <!-- Icon Block -->
                        <div class="media justify-content-center">
                          <div class="d-flex">
                            <span class="text-body font-size-1 mt-md-5">
                              <i class='bx bxs-calendar'></i>
                              Update : <?php echo $row_show["date"]; ?>
                            </span>
                          </div>
                        </div>
                        <!-- End Icon Block -->
                      </div>

                    </div>
                    <div class="row border-top pt-3 mt-3">
                      <div class="text-center mt-3 mt-md-0 col-md-6">
                        <a class="text-body" href="javascript:void;" onclick="window.location.reload();">
                          <i class="icofont-refresh mr-1"></i>
                          Refresh Manual
                        </a>
                      </div>
                      <div class="text-center mt-3 mt-md-0 col-md-6">
                        <a class="text-body" href="temp_auto.php">
                          <i class="icofont-gear mr-1"></i>
                          Refresh Otomatis
                        </a>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade" id="lastest" role="tabpanel" aria-labelledby="lastest-tab">

                  <!-- Table -->
                  <div class="table-responsive">
                    <table class="table table-borderless table-nowrap table-align-middle text-center">
                      <thead>
                        <tr>
                          <th>Identity</th>
                          <th>Temperature</th>
                          <th>Humidity</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($row_top = mysqli_fetch_array($query_top)) {
                          echo '<tr><td>#' . $row_top["id"] . '</td><td>' . $row_top["temperature"] . '°C</td><td>' . $row_top["humidity"] . '</td><td>' . $row_top["date"] . '</td></tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table -->

                </div>

                <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">

                  <!-- Table -->
                  <div class="table-responsive">
                    <table class="table table-borderless table-nowrap table-align-middle text-center">
                      <thead>
                        <tr>
                          <th>Identity</th>
                          <th>Temperature</th>
                          <th>Humidity</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($row_all = mysqli_fetch_array($query_all)) {
                          echo '<tr><td>#' . $row_all["id"] . '</td><td>' . $row_all["temperature"] . '°C</td><td>' . $row_all["humidity"] . '</td><td>' . $row_all["date"] . '</td></tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table -->

                </div>
              </div>
              <!-- End Tab Content -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->

        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php require('../auto/footer/footer.php'); ?>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop":100,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="icofont-rounded-up icofont-2x"></i>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="./../../res/main.js/jquery/jquery.min.js"></script>
  <script src="./../../res/main.js/jquery/jquery-migrate.min.js"></script>
  <script src="./../../res/main.js/vendor/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./../../res/main.js/script/hs-header.min.js"></script>
  <script src="./../../res/main.js/script/hs-go-to.min.js"></script>
  <script src="./../../res/main.js/script/hs-unfold.min.js"></script>
  <script src="./../../res/main.js/script/hs-mega-menu.min.js"></script>
  <script src="./../../res/main.js/script/hs-show-animation.min.js"></script>
  <script src="./../../res/main.js/jquery/jquery.validate.min.js"></script>
  <script src="./../../res/main.js/vendor/select2.full.min.js"></script>

  <!-- JS Front -->
  <script src="./../../res/main.js/script/hs.core.js"></script>
  <script src="./../../res/main.js/script/hs.validation.js"></script>
  <script src="./../../res/main.js/script/hs.select2.js"></script>

  <!-- JS Plugins Init. -->
  <script src="./../../res/main.js/plugin/init-my.js"></script>

  <!-- IE Support -->
  <script src="./../../res/main.js/script/ie-sup.js"></script>

</body>

</html>