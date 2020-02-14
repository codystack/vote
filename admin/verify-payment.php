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
       <?php require('./components/footer.php'); ?>
        <!-- End Footer -->