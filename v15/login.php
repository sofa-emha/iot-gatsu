<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Title -->
  <title>Masuk Akun</title>

  <!-- Meta Tags -->
  <?php require('d/my/auto/header/metaTag.php'); ?>

  <!-- Icon -->
  <link rel="stylesheet" href="./d/lib/icon/icofont/icofont.min.css">
  <link rel="stylesheet" href="./d/lib/icon/boxicons/css/boxicons.min.css">

  <!-- CSS Front Template -->
  <?php require('d/my/auto/header/linkMainTag.php'); ?>

</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-bg-transparent header-abs-top">
    <div class="header-section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="navbar navbar-expand header-navbar">
          <!-- White Logo -->
          <a class="d-none d-lg-flex navbar-brand header-navbar-brand" href="https://smkn1pml.sch.id/" target="_blank" aria-label="Front">
            <img class="icon-brand-pc" src="./d/lib/icon/LogoNepal.png" alt="Logo">
          </a>
          <!-- End White Logo -->

          <!-- Default Logo -->
          <a class="d-flex d-lg-none navbar-brand navbar-brand-sm header-navbar-brand header-navbar-brand-collapsed" href="https://smkn1pml.sch.id/" target="_blank" aria-label="Front">
            <img src="./d/lib/icon/LogoNepal.png" alt="Logo">
          </a>
          <!-- End Default Logo -->

        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative vh-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3">
            <!-- Form -->
            <form class="js-validate" id="loginFromIOT" autocomplete="off" method="POST">
              <!-- Title -->
              <div class="text-center mb-5 mb-md-7">
                <h1 class="h2">Selamat Datang</h1>
              </div>
              <!-- End Title -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="loginUser">Nama Pengguna</label>
                <input type="text" class="form-control" name="usr" id="loginUser" tabindex="1" placeholder="Nama Pengguna" aria-label="username" required data-msg="Tulis nama pengguna dengan benar.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="loginPassword" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    Kata Sandi
                  </span>
                </label>
                <input type="password" class="form-control" name="pwd" id="loginPassword" tabindex="2" placeholder="********" aria-label="********" required data-msg="Tulis kata sandi dengan benar.">
              </div>
              <!-- End Form Group -->

              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <span class="font-size-1"></span>
                  <a href="/" class="font-size-1 font-weight-bold">Kembali ke Beranda</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                  <input type="submit" value="Masuk Akun" id="submit" onclick="validate()" class="btn btn-sm btn-primary transition-3d-hover"></input>
                </div>
              </div>
              <!-- End Button -->
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="./d/res/main.js/jquery/jquery.min.js"></script>
  <script src="./d/res/main.js/jquery/jquery-migrate.min.js"></script>
  <script src="./d/res/main.js/vendor/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./d/res/main.js/jquery/jquery.validate.min.js"></script>
  <script src="./d/res/main.js/custom/validate.js"></script>

  <!-- JS Front -->
  <script src="./d/res/main.js/script/hs.core.js"></script>
  <script src="./d/res/main.js/script/hs.validation.js"></script>

  <!-- JS Plugins Init. -->
  <script src="./d/res/main.js/plugin/init-login.js"></script>

  <!-- IE Support -->
  <script src="./d/res/main.js/script/ie-sup.js"></script>

</body>

</html>