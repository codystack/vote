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
    Payment gateway :: Vote Online&trade;
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
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
     <div class="container-fluid">
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Paystack -->
      <div class="row paystack">
        <div class="col paymentgateway1">
          <center><img class="paymentgateway" src="https://i.imgur.com/uqID9zt.png" style="width: 300px;"></center>
          <div class="paymentgatewaytrigger">
            <h4>Off/On</h4>
          <label class="custom-toggle">
            <input type="checkbox">
            <span class="custom-toggle-slider rounded-circle"></span>
          </label>
          </div>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="liveSecretKey" placeholder="Live Secret Key">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="livePublicKey" placeholder="Live Public Key">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <center><button type="button" class="btn btn-info">Save changes</button></center>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      <!-- End Paystack -->

      <!-- Flutterwave -->
      <div class="row flutterwave">
        <div class="col paymentgateway2">
          <center><img class="paymentgateway" src="https://i.imgur.com/GY1r8jV.png" style="width: 300px;"></center>
          <div class="paymentgatewaytrigger">
            <h4>Off/On</h4>
          <label class="custom-toggle">
            <input type="checkbox" checked>
            <span class="custom-toggle-slider rounded-circle"></span>
          </label>
          </div>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="publicKey" placeholder="Public Key">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="secretKey" placeholder="Secret Key">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="encryptionKey" placeholder="Encryption Key">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <button type="button" class="btn btn-info">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      <!-- End Flutterwave -->

        <!-- Footer -->
        <?php require_once'components/footer.php'; ?>
        <!-- End Footer -->
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