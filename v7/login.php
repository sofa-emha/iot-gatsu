<!doctype html>
<html lang="en">

<head>

  <!-- Title -->
  <title>Log-in Panel</title>

  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#5D38FF"> <!-- Chrome, Firefox OS and Opera -->
  <meta name="msapplication-navbutton-color" content="#5D38FF"> <!-- Windows Phone -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#5D38FF"> <!-- iOS Safari -->

  <!-- Link -->
  <link rel="stylesheet" href="./res/main.css/index/style.css">
  <link rel="stylesheet" href="./res/main.css/vendor/bs5.css">

</head>

<body class=" body-before" onload="ready();">
  <div class="preload">
    <div class="loader">
      <div class="wrapper">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="navbarku text-center">
      <div class="keluar d-flex flex-row flex-row-reverse">
        <div class="bg-profil mx-4" data-toggle="modal" data-target="#infoModal">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
            <circle cx="8" cy="4.5" r="1" />
          </svg>
        </div>
      </div>
      <div class="jam" id="jam">00:00</div>
    </div>
    <div class="row">
      <div class="col-lg-7 kotak home-display d-flex">
        <div class="view-con">
          <div class="display-6 px-5 w-100 text-rumah"><span class="font-weight-normal">My Home</span></div>
          <div class="rumah w-100">
            <div class="box-rumah">
              <div class="atap2"></div>
              <div class="atap1"></div>
              <div class="lantai1"></div>
              <div class="lantai2"></div>
              <div class="pintu"></div>
              <div class="pagar"></div>
              <div class="jendela"></div>
              <div class="lampu1"></div>
              <div class="lampu2"></div>
            </div>
            <div class="suhu-mobile">
              <span class="angka">30</span>
              <span class="unit">°C</span>
              <div class="detail">berawan</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 kotak control-panel">
        <div class="cuaca">
          <div class="cuaca-isi shadow-sm">
            <div class="suhu">
              <span class="angka">30</span>
              <span class="unit">°C</span>
              <div class="detail">berawan</div>
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" />
              </svg>
            </div>
            <div class="nama"></div>
          </div>
        </div>
        <div class="panel">
          <div class="row">
            <div class="col-md-6 col-lg-12 mx-auto">
              <form action="./my.php" method="GET">
                <div class="mb-3">
                  <label for="user" class="form-label font-weight-bold">Username</label>
                  <input type="text" class="input-login shadow-sm" id="user" name="user" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label for="pass" class="form-label font-weight-bold">Password</label>
                  <input type="password" class="input-login shadow-sm" id="pass" name="pass" required>
                </div>
                <button type="submit" onclick="loading()" class="tombol-login mt-4">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="infoModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script src="./res/main.js/vendor/popper.js"></script>
  <script src="./res/main.js/vendor/bs5.js"></script>
  <script src="./res/main.js/vendor/jquery.js"></script>
  <script src="./res/main.js/login/script.js"></script>
</body>

</html>