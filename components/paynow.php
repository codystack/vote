<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pay :: Vote Online&trade;</title>
		
		<!-- Favicon -->
  		<link href="https://i.imgur.com/kVguEsz.png" rel="icon" type="image/png">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/pay.css">
	</head>
	<body>
		<div class="wrapper">
            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>

						<div class="form-content" >
							<div class="form-header">
								<h3>Vote for Juliet</h3>
							</div>
							<p>Select or input number of votes</p>

							<center>
							<div class="input-group mba">
						  <div class="input-group-prepend">
						    <label class="input-group-text">Vote(s)</label>
						  </div>
						  <select class="custom-select">
						    <option value="5">5</option>
						    <option value="6">6</option>
						    <option value="7">7</option>
						  </select>
						</div>
					</center>
						<!-- The amount should increse when the numbers go up and vice versa -->
						<h6><strong>Amount:</strong> ₦2,500</h6>

						<p>Please note that each vote cost ₦50 and,<br> a minimum of 5 votes is required.
						</p>

						</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Mode of Payment</h3>
							</div>
							<p>Please select how you want to pay</p>
							<div class="paycon d-flex">
								<div class="caption p-4">
									<img src="https://i.imgur.com/6oy946q.png" height="58"/>
									<p class="mt-3"><input type="checkbox">  Pay online</p>
								</div>
								<div class="caption p-4">				
									<img src="https://i.imgur.com/2kAAycz.png" height="58" />
									<p class="mt-3"><input type="checkbox">  Bank transfer/Deposit</p>
								</div>
							   
							</div>
						</div>
					</div>
                </section>

                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Make Payment</h3>
							</div>
							<p>Make a payment of ₦2,500 to the account below</p>
							

							<table class="table table-striped">
							  <tbody>
							    <tr>
							      <th scope="row">Bank:</th>
							      <td>Zenith Bank</td>
							    </tr>
							    <tr>
							      <th scope="row">Account name:</th>
							      <td>Contagious Agency LTD</td>
							    </tr>
							    <tr>
							      <th scope="row">Account number:</th>
							      <td colspan="2">1016160074</td>
							    </tr>
							  </tbody>
							</table>


						</div>
					</div>
                </section>


                <!-- SECTION 4 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="images/form-wizard-1.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Payment details</h3>
							</div>
							<p>Fill in depositor's account details of the account. For bank deposit, fill in deposit slip details for confirmation.</p>
							<div class="form-row">
								<div class="form-holder w-100">
									<input type="text" placeholder="Bank" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Account Name" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Account Number" class="form-control">
								</div>
							</div>
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/pay.js"></script>

		
</body>
</html>
