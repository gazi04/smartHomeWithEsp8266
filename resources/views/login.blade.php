<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" href="assets/img/iot.png">
  <title>Qendra e kontrollit SmartHome</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h2 class="font-weight-bolder">Mirë se vini në SmartHome tuaj</h2>
                  <p class="mb-0">Merrni kontrollin e shtëpisë tuaj. Hyni për të monitoruar dhe menaxhuar mjedisin tuaj.</p>
                  @if ($errors->any())
                    <div class="alert alert-danger mt-3" role="alert">
                      {{ $errors->first() }}
                    </div>
                  @endif
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('authenticate') }}">
                      @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" name="name" placeholder="Emri i Përdoruesit" aria-label="Emri i përdoruesit" required>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" name="password" placeholder="Fjalëkalimi" aria-label="Fjalëkalimi" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Hyni në Shtëpinë Tuaj</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    I ri në SmartHome?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Krijo një llogari</a>
                  </p>
                </div>
              </div>
            </div>
              <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('assets/img/smart-home2.jpg'); background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.3);"></div>
                  <div class="position-relative z-index-1">
                    <h2 class="mt-5 text-white font-weight-bolder">Shtëpia Juaj, Më e Zgjuar</h2>
                    <p class="text-white" style="font-weight: 600; font-size: 1rem; word-spacing: 3px; letter-spacing: .5px;">Monitoroni temperaturën, lagështinë dhe më shumë. Kontrolloni dritat, pajisjet dhe sigurinë të gjitha nga një vend.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  </body>

</html>
