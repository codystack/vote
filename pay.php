<?php
require ('./components/header.php');
?>
    <div class="header pt-5">
        <img src="https://i.imgur.com/XSGaWUp.png" width="280px">
        <!--Content before waves-->
        <div class="inner-header mt-3">
            <div class="h3 text-white font-weight-light">Complete Your Vote</div>
        </div>

        <div id="contestant">
            <button class="d-none" type="button" id="submit"></button>

            <div class="wrapper">
                <form action="" id="wizard">
                <!-- SECTION 1 -->
                    <h2></h2>
                    <section>
                        <div class="inner">
                            <div class="image-holder">
                                <img class="constant-img" src="https://i.imgur.com/b2ZMlsd.jpg" height="521" alt="">
                            </div>
                            <div class="form-content" >
                                <div class="form-header">
                                    <h3>Vote for Juliet</h3>
                                </div>
                                <p>Select or input number of votes</p>
                                <div style="text-align: center;">
                                    <div class="input-group mba mb-4">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text">Vote(s)</label>
                                    <input id="display" type="text" class="px-3" value='1' disabled>
                                    <input id="display" type="hidden" value='1' name="voteCount">
                                    <input type="button" value="+" id="inc" onclick="incNumber()"/>
                                    <input type="button" value="-" id="dec" onclick="decNumber()"/>
                                    </div>
                                    </div>
                                </div>
                            <!-- The amount should increse when the numbers go up and vice versa -->
                                <h4 style="color: #0a0c0d; margin-bottom: 1rem;">Amount: &#8358;<span id="total-amount"></span></h4>
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
                                <img class="constant-img" src="https://i.imgur.com/b2ZMlsd.jpg" alt="" height="521">
                            </div>
                            <div class="form-content">
                                <div class="form-header">
                                    <h3>Mode of Payment</h3>
                                </div>
                                <p>Please select how you want to pay</p>
                                <div class="paycon d-flex">
                                    <div class="caption p-4">
                                        <img src="https://i.imgur.com/6oy946q.png" height="58"/>
                                        <p class="mt-3"><input type="checkbox" id="checkBoxField" onchange="changeHandler()">  Pay online</p>
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
                                <img class="constant-img" src="https://i.imgur.com/b2ZMlsd.jpg" alt="" height="521">
                            </div>
                            <div class="form-content">
                                <div class="form-header">
                                    <h3>Make Payment</h3>
                                </div>
                                <p>Make a payment of &#8358;<span id="total-payment"></span> to the account below</p>
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
                                <img class="constant-img" src="https://i.imgur.com/b2ZMlsd.jpg" alt="" height="521">
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
        </div>
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
    <!--Header ends-->
<?php
require ('./components/footer.php');
?>

<script>
    $("h3").css("color","red");
</script>
