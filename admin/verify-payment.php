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
     Verify payment :: Vote Online&trade;
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
      <!-- Verify Payment -->
      <div class="row">
        <div class="col paymentgateway1">
          <center><img class="paymentgateway" src="https://i.imgur.com/yyDfFdU.png" style="width: 150px;"></center>
          <form>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  

                  <div class="container">
                      <div class="card">
                    <div class="card-header">
                    Payment date:
                    <strong>01/01/01/2018</strong> 
                      <span class="float-right"> <strong>Status:</strong> Pending</span>

                    </div>
                    <div class="card-body">
                    <div class="row mb-4">
                    <div class="col-sm-6">
                    <h6 class="mb-3">For:</h6>
                    <div>
                    <strong>AC01</strong>
                    </div>
                    </div>

                    </div>

                    <div class="table-responsive-sm">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>Bank</th>
                    <th>Account Name</th>

                    <th class="right">Account Number</th>
                      <th class="center">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td class="left strong">Zenith Bank</td>
                    <td class="left">Okoro ThankGod</td>

                    <td class="right">2178005104</td>
                      <td class="center">₦2,500.00</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>


                    <div class="col-lg-4 col-sm-5 ml-auto verifypayment">
                      <button class="btn btn-icon btn-3 btn-info verifypayment" type="button">
                      <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                        <span class="btn-inner--text">Approve</span>
                    </button>

                    <button class="btn btn-icon btn-3 btn-danger verifypayment" type="button">
                      <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                        <span class="btn-inner--text">Delete</span>
                    </button>
                    </div>

                    </div>

                    </div>
                    </div>
                    </div>

                </div>
              </div>
            </div>
            </div>
          </form>
        </div>

      <!-- End Verify Payment -->


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