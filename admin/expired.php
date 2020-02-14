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
     Account suspended :: Vote Online&trade;
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

  <!-- Left Navbar -->
  <div class="main-content">
  <!-- Left Top Navbar -->

    <!-- Top Navbar -->
    <!-- End Top Navbar -->

        <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
     <div class="container-fluid">
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Verify Payment -->
      <div class="row">
        <div class="col expired">
          <center>
            <img class="expired" src="https://i.imgur.com/a5dFDRc.png" style="width: 150px;">
            <h1>Your Vote Online license has expired</h1>
            <p>Enter your license key to activate license and update to new features.</p>
          </center>
          <form>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="contestantName" placeholder="Enter your license key Ex: VO25gdwHkdVM4628fgdVD3630">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <center>
                      <button class="btn btn-icon btn-3 btn-info verifypayment" type="button" data-toggle="modal" data-target="#modal-form">
                      <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                        <span class="btn-inner--text">Activate account</span>
                    </button>

                    <!-- Modal -->

                    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                          <div class="modal-content">
                            
                              <div class="modal-body p-0">
                                
                                    
                  <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-transparent pb-5">
                          <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                          <div class="btn-wrapper text-center">
                              <a href="#" class="btn btn-neutral btn-icon">
                                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                                  <span class="btn-inner--text">Github</span>
                              </a>
                              <a href="#" class="btn btn-neutral btn-icon">
                                  <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                                  <span class="btn-inner--text">Google</span>
                              </a>
                          </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5">
                          <div class="text-center text-muted mb-4">
                              <small>Or sign in with credentials</small>
                          </div>
                          <form role="form">
                              <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Email" type="email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group input-group-alternative">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Password" type="password">
                                  </div>
                              </div>
                              <div class="custom-control custom-control-alternative custom-checkbox">
                                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                  <label class="custom-control-label" for=" customCheckLogin">
                                      <span class="text-muted">Remember me</span>
                                  </label>
                              </div>
                              <div class="text-center">
                                  <button type="button" class="btn btn-primary my-4">Sign in</button>
                              </div>
                          </form>
                      </div>
                  </div>
                              
                          </div>
                      </div>
                  </div>
                    </div>

                    <!-- End Modal -->

                    <button class="btn btn-icon btn-3 btn-danger verifypayment" type="button">
                      <span class="btn-inner--icon"><i class="ni ni-credit-card"></i></span>
                        <span class="btn-inner--text">Pay for license</span>
                    </button>
                  </center>
                </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      <!-- End Verify Payment -->


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