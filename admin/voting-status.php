<!--

=========================================================
* Vote Online Dashboard - v2.1.2
========================================================

* Product Page: https://www.voteonline.com.ng
* Copyright 2020 WebifyNG (https://www.webify.com.ng)

========================================================= 
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Voting status :: Vote Online&trade;
  </title>
  <!-- Favicon -->
  <link href="https://i.imgur.com/kVguEsz.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/voteonline-dashboard.css?v2.1.2" rel="stylesheet" />
</head>

<body class="">
  <?php require_once'components/leftnav.php'; ?>

  <!-- Left Navbar -->
  <div class="main-content">
  <!-- Left Top Navbar -->

    <!-- Top Navbar -->
    <?php require_once'components/topnav.php'; ?>
    <!-- End Top Navbar -->
      <!-- Header -->
          <div class="header bg-gradient-primary pb-8 pt-5 pt-lg-8 d-flex align-items-center">
            <!-- Header container -->
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 text-center">
                  <h3 class="display-2 text-white">Voting Status</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- Page content -->
          <div class="container-fluid mt--7">
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card bg-gradient-default text-center p-5">
                  <div class="votestatustrigger">
                    <h4>Open/close voting</h4>
                  <label class="custom-toggle">
                    <input type="checkbox">
                    <span class="custom-toggle-slider rounded-circle"></span>
                  </label>
                  </div>
                </div>
              </div>
            </div>
            <!-- Footer -->
          </div>
        </div>

    </div>
  </div>
  <!--   Core   -->
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Voteonline JS   -->
  <script src="assets/js/voteonline-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
</body>

</html>