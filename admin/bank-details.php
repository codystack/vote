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
      <!-- Bank -->
      <div class="row bank">
        <div class="col bankdetails">
          <center><img class="bankicon" src="https://i.imgur.com/PYN3lpT.png" style="width: 150px;"></center>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
                    <select class="form-control" id="bank">
                      <option value="">-- Choose a Bank --</option>
                      <option value="0">Access Bank</option>
                      <option value="1">Access Bank (Diamond)</option>
                      <option value="2">ALAT by WEMA</option>
                      <option value="3">ASO Savings and Loans</option>
                      <option value="4">Citibank Nigeria</option>
                      <option value="5">Ecobank Nigeria</option>
                      <option value="6">Ekondo Microfinance Bank</option>
                      <option value="7">Fidelity Bank</option>
                      <option value="8">First Bank of Nigeria</option>
                      <option value="9">First City Monument Bank</option>
                      <option value="10">Globus Bank</option>
                      <option value="11">Guaranty Trust Bank</option>
                      <option value="12">Heritage Bank</option>
                      <option value="13">Jaiz Bank</option>
                      <option value="14">Keystone Bank</option>
                      <option value="15">Kuda Bank</option>
                      <option value="16">Parallex Bank</option>
                      <option value="17">Polaris Bank</option>
                      <option value="18">Providus Bank</option>
                      <option value="19">Rubies MFB</option>
                      <option value="20">Sparkle Microfinance Bank</option>
                      <option value="21">Stanbic IBTC Bank</option>
                      <option value="22">Standard Chartered Bank</option>
                      <option value="23">Sterling Bank</option>
                      <option value="24">Suntrust Bank</option>
                      <option value="25">TAJ Bank</option>
                      <option value="26">Union Bank of Nigeria</option>
                      <option value="27">United Bank For Africa</option>
                      <option value="28">Unity Bank</option>
                      <option value="29">VFD</option>
                      <option value="30">Wema Bank</option>
                      <option value="31">Zenith Bank</option>
                    </select>

                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="accountName" placeholder="Account Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="accountNumber" placeholder="Account Number">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                <button type="button" class="btn btn-info">Save Details</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      <!-- End Bank -->


        <!-- Footer -->
      <?php require('./components/footer.php'); ?>
      <!-- End Footer -->