<div id="contestant">
    <button class="d-none" type="button" id="submit"></button>

    <div class="container">
        <div class="row">
            <div class="col">


                <form id="paymentform" class="form" enctype="multipart/form-data">

                    <!-- SECTION 1 -->

                    <section id="div1" style="display: none">
                        <div class="row ml-0 mr-0 d-inline-flex">
                            <div class="col pl-0 pr-0">
                                <img class="constant-img" src="./admin/uploads/<?php echo $image;?>" height="521" alt="">
                            </div>
                            <div class="col bg-white">
                                <div class="form-content" >
                                    <div class="form-header">
                                        <h3 class="m-0 mb-2">Vote for <?php echo strtoupper($pseudo);?></h3>
                                        <h6 class="mb-5" style="color: #259dab;">Vote Result: <?php echo $scores;?></h6>
                                    </div>
                                    <p>Select Number of Votes</p>
                                    <div style="text-align: center;">
                                        <div class="input-group mba mb-4">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Vote(s)</label>
                                                <input id="display" type="text" class="px-3" value='<?php echo $_SESSION['VOTTING_MIN'] ?>' disabled>
                                                <input id="contestant" type="hidden" name="q" value="<?php echo $pseudo;?>">
                                                <input id="count" type="hidden" value='<?php echo $_SESSION['VOTTING_MIN'] ?>' name="voteCount">
                                                <input id="total" type="hidden" value='<?php echo $_SESSION['VOTTING_PRICE'] * $_SESSION['VOTTING_MIN'] ?>' name="totalAmount">
                                                <input type="button" value="+" id="inc" onclick="incNumber()"/>
                                                <input type="button" value="-" id="dec" onclick="decNumber()"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- The amount should increse when the numbers go up and vice versa -->
                                    <h4 style="color: #0a0c0d; margin-bottom: 1rem;">Amount: &#8358;<span id="total-amount"></span></h4>
                                    <p>Please note that each vote cost ₦<?php echo $_SESSION['VOTTING_PRICE'] ?> only.<br>And a minimum of <?php echo $_SESSION['VOTTING_MIN'] ?> votes is required.
                                    </p>
                                    <input type="button" class="bubbly-button2" value="Next" id="next1"/>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 2 -->
                    <section id="div2" style="display: none">
                        <div class="row ml-0 mr-0 d-inline-flex">
                            <div class="col pl-0 pr-0">
                                <img class="constant-img" src="./admin/uploads/<?php echo $image;?>" alt="" height="521">
                            </div>
                            <div class="col bg-white">
                                <div class="form-content">
                                    <div class="form-header">
                                        <h3 class="m-0 mb-2">Mode of Payment</h3>
                                        <h6 class="mb-5" style="color: #259dab;">Vote Result: <?php echo $scores;?></h6>
                                    </div>
                                    <p>Please select how you want to pay</p>
                                    <div class="paycon d-flex">
                                        <div class="caption p-4">
                                            <img src="https://i.imgur.com/6oy946q.png" height="58"/>
                                            <p class="mt-3"><input type="checkbox" id="checkBoxField" onchange="changeHandler()">  Pay online</p>
                                        </div>
                                        <div class="caption p-4">
                                            <img src="https://i.imgur.com/2kAAycz.png" height="58" />
                                            <p class="mt-3"><input type="checkbox" id="checkBoxTransfer" onchange="changeHandlertransfer()">  Bank transfer/Deposit</p>
                                        </div>
                                    </div>
                                    <input type="button" class="bubbly-button2 " value="Previous" id="prev2"/>
                                    <input type="button" class="bubbly-button2 prev" value="Next" id="next2" disabled="disabled"/>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 3 -->
                    <section id="div3" style="display: none">
                        <div class="row ml-0 mr-0 d-inline-flex">
                            <div class="col pl-0 pr-0">
                                <img class="constant-img" src="./admin/uploads/<?php echo $image;?>" alt="" height="521">
                            </div>
                            <div class="col bg-white">
                                <div class="form-content">
                                    <div class="form-header">
                                        <h3 class="m-0 mb-2">Make Payment</h3>
                                        <h6 class="mb-5" style="color: #259dab;">Vote Result: <?php echo $scores;?></h6>
                                    </div>
                                    <p>Make a payment of &#8358;<span id="total-payment"></span> to the account below</p>
                                    <table class="table table-striped">
                                        <tbody>
                                        <?php
                                        $bankSelect = "SELECT * FROM clientaccount WHERE status = 1";
                                        $result = mysqli_query($conn, $bankSelect);
                                        if (mysqli_num_rows($result) > 0){
                                            $row = mysqli_fetch_assoc($result);
                                            $bank = $row['bank'];
                                            $accountNum = $row['accountnumber'];
                                            $accountName = $row['accountname'];
                                        }

                                        ?>
                                        <tr>
                                            <th class="text-left" scope="row">Bank:</th>
                                            <td align="right"><?php echo $bank; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left" scope="row">Account name:</th>
                                            <td align="right"><?php echo $accountName; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left" scope="row">Account number:</th>
                                            <td colspan="2" align="right"><?php echo $accountNum; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <input type="button" class="bubbly-button2" value="Previous" id="prev3"/>
                                    <input type="button" class="bubbly-button2" value="Next" id="next3"/>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 4 -->
                    <section id="div4" style="display: none">
                        <div class="row ml-0 mr-0 d-flex">
                            <div class="col-5 p-0 m-0">
                                <img class="constant-img" src="./admin/uploads/<?php echo $image;?>" alt="" height="521">
                            </div>
                            <div class="col-6 bg-white">
                                <div class="form-content">
                                    <div class="form-header">
                                        <h3 class="m-0 mb-2">Payment details</h3>
                                        <h6 class="mb-4" style="color: #259dab;">Vote Result: <?php echo $scores;?></h6>
                                    </div>
                                    <p id="status" class="p-0">Fill in depositor's account details of the account. or bank deposit slip details for confirmation.</p>
                                    <div class="input-group mb-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="myInput" name="proofimg" aria-describedby="myInput">
                                            <label class="custom-file-label" for="myInput"><small>Click to Upload a Proof of Payment</small></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="bankname" name="bankname" type="text" placeholder="Bank Name" class="form-control">
                                        <span class="error"></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col payinput">
                                                <input id="actname" name="actname" type="text" placeholder="Account Name" class="form-control">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col payinput">
                                                <input id="actnumber" name="actnumber" type="text" placeholder="Account Number" class="form-control">
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" class="bubbly-button2" value="Previous" id="prev4"/>
                                    <input type="button" class="bubbly-button2 prev" value="Submit" id="next4" disabled="disabled"/>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="div5" style="display: none">
                        <div class="row ml-0 mr-0 m-auto">
                            <div class="col-5 p-0 m-0">
                                <img class="constant-img" src="./admin/uploads/<?php echo $image;?>" alt="" height="521">
                            </div>
                            <div class="col-6 bg-white">
                                <div class="form-content">
                                    <div class="form-header">
                                        <h3 class="m-0 mb-2">Enter your Details</h3>
                                        <h6 class="mb-5" style="color: #259dab;">Vote Result: <?php echo $scores;?></h6>
                                    </div>
                                    <p>Please fill all field to complete your online payment</p>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col payinput">
                                                <input id="onlinepay" type="hidden" name="payment" value="1">
                                                <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col payinput">
                                                <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control">
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                        <span class="error"></span>
                                    </div>
                                    <input type="button" class="bubbly-button2" value="Previous" id="prev5"/>
                                    <input type="button" class="bubbly-button2 prev" value="Submit" id="next5" disabled="disabled"/>
                                </div>
                            </div>
                        </div>
                    </section>

                </form>

            </div>
        </div>
    </div>
</div>
