<?php
require('./../conn/sqlite3.php');

if (!$db) {
  $db->lastErrorMsg();
} else {
  $res = $db->query('SELECT * FROM pintu');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Title -->
  <title>Data dan Statistik | Gerbang Rumah</title>

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
              <h1 class="h2 text-white">Gerbang Rumah</h1>
            </div>

            <!-- Breadcrumb -->
            <ol class="breadcrumb breadcrumb-light breadcrumb-no-gutter mb-0">
              <li class="breadcrumb-item">My</li>
              <li class="breadcrumb-item">Data dan Statistik</li>
              <li class="breadcrumb-item active" aria-current="page">Gerbang Rumah</li>
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
                      <a class="nav-link active" href="gate.php">
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
                      <a class="nav-link" href="temp.php">
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
          <div class="card space-bottom-1">

            <!-- Header -->
            <div class="card-header justify-content-center">
              <h5 class="card-header-title">Tabel Statistik</h5>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle text-center">
                <thead class="thead-light">
                  <tr>
                    <th>Identity</th>
                    <th>Value</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    while ($row = $res->fetchArray()) {
                      echo "<tr><td>#{$row['id']}</td><td>{$row['nilai']}</td><td>{$row['status']}</td></tr>";
                    }
                    ?>
                </tbody>
              </table>
            </div>
            <!-- End Table -->

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