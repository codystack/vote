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
    Contestants :: Vote Online&trade;
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
      <!-- Table -->
      <div class="row">
        <div class="col addcontestants">
          <div class="pseudotrigger">
            <h4>Turn on/off pseudo code</h4>
          <label class="custom-toggle">
            <input type="checkbox">
            <span class="custom-toggle-slider rounded-circle"></span>
          </label>
          </div>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Contestant name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Pseudo code" class="form-control" disabled />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Upload picture dimension <small>(1000px - 1000px)</small></label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <button type="button" class="btn btn-info">Add Contestant</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Footer -->
      
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