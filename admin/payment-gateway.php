<?php
require ('./components/header.php');
require_once'./components/navbar.php'; 
?>

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
      <?php require('./components/footer.php'); ?>
      <!-- End Footer -->