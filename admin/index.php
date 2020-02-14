<?php
require_once ("../config/db.php");
require_once ("../controller/auth_controller.php");

if (!isset($_SESSION['admin_session'])){

    if (isset($_GET['username_error']) && $_GET['username_error'] === 'Enter your admin username'){
        $invalid_username = "is-invalid";
        $invalid_username_Msg = "<div class=\"invalid-feedback\">".$_GET['username_error']."</div>";
    }
    if (isset($_GET['password_error']) && $_GET['password_error'] === 'Enter the correct admin password'){
        $invalid_password = "is-invalid";
        $invalid_password_Msg = "<div class=\"invalid-feedback\">".$_GET['password_error']."</div>";
    }
    if (isset($_GET['no_account']) && $_GET['no_account'] === 'You do not have access to this portal!'){
        $invalid_username = "is-invalid";
        $invalid_password = "is-invalid";
        $invalid_entry_Msg = "<small class=\"invalid-feedback d-block\">".$_GET['no_account']."</small>";
    }

    echo '
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title>
            Register :: Vote Online&trade;
          </title>
          <!-- Favicon -->
          <link href="https://i.imgur.com/kVguEsz.png" rel="icon" type="image/png">
          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
          <!-- Icons -->
          <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
          <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
          <!-- CSS Files -->
          <link href="assets/css/voteonline-dashboard.css?v=1.1.2" rel="stylesheet" />
        </head>
        
        <body class="bg-default">
          <div class="main-content">
            <div class="header bg-gradient-primary py-7 py-lg-8">
              <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                  <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
              </div>
            </div>
            <!-- Page content -->
            <div class="container mt--8 pb-5 mt-lg-5">
              <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                  <div class="card bg-secondary shadow border-0">
            
                    <div class="card-body px-lg-5 py-lg-5">
                      <div class="text-center text-muted mb-4">
                        Admin Portal
                      </div>
                      '.$invalid_entry_Msg.'
                      <form role="form" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="POST">
                        <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control '.$invalid_username.'" placeholder="Username" type="username" name="username">
                            '.$invalid_username_Msg.'
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control '.$invalid_password.'" placeholder="Password" type="password" name="password">
                            '.$invalid_password_Msg.'
                          </div>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary my-4" name="admin_login_btn">Secure Login</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
    
    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              <p>&copy; <script>document.write(new Date().getFullYear());</script>
              All Rights Reserved  by <a href="https://www.voteonline.com.ng" style="text-decoration: none;" target="_blank">Vote Online&trade;</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
    ';
} else {
    header("Location: dashboard");
}
?>