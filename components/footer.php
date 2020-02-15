<div class="content flex">
    <p>&copy; <script>document.write(new Date().getFullYear());</script>
        All Rights Reserved  by <a href="https://voteonline.com.ng" style="text-decoration: none;" target="_blank">Vote Online&trade;</a>
    </p>
</div>

<!-- JQUERY -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- JQUERY STEP -->
<script src="js/pay.js"></script>
<!--<script src="contestants/js/jquery-3.3.1.min.js"></script>-->
<!-- JQUERY STEP -->
<script src="js/jquery.steps.js"></script>
<script src="config.js"></script>
<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--<script src="js/main.js"></script>-->
<!--<script src="js/extention/choices.js"></script>-->
<script>
    // $("section").hide('fast');
    $(document).ready(function () {
        $("section:nth-child(1)").show('fast');
        $("#next1").click(function () {
            $("section:nth-child(1)").hide('fast');
            $("section:nth-child(2)").show('fast');
        });
        // $("#next2").click(function () {
        //     $("section:nth-child(2)").hide('fast');
        //     $("section:nth-child(3)").show('fast');
        // });
        $("#next3").click(function () {
            $("section:nth-child(3)").hide('fast');
            $("section:nth-child(4)").show('fast');
        });
        $("#next4").click(function () {
            $('#paymentform').get(0).submit();
        });
        $("#next5").click(function () {
            $('#paymentform').get(0).submit();
        });
        $("#searchBtn").click(function () {
            $('#searchForm').get(0).submit();
        });

        $("#prev2").click(function () {
            $("section:nth-child(1)").show('fast');
            $("section:nth-child(2)").hide('fast');
        });
        $("#prev3").click(function () {
            $("section:nth-child(2)").show('fast');
            $("section:nth-child(3)").hide('fast');
        });
        $("#prev4").click(function () {
            $("section:nth-child(3)").show('fast');
            $("section:nth-child(4)").hide('fast');
        });
    });

    function changeHandler(){
        // enable next buttun
        $("#onlinepay").val('1');
        document.getElementById("checkBoxTransfer").checked = false;
        $("input#next2").removeClass('prev');
        $("input#next2").prop("disabled", false);

        let voteCount = $("#count").val();
        let totalAmount = $("#total").val();
        // var contestant = $("#contestant").val();
        let contestant = getUrlVars()["q"];

        // storing value in sessions
        sessionStorage.setItem('contestant',contestant);
        sessionStorage.setItem('voteCount',voteCount);
        sessionStorage.setItem('totalAmount',totalAmount);

        $("#next2").click( function () {
            $("section:nth-child(5)").show('fast');
            $("section:nth-child(2)").hide('fast');
            $("section:nth-child(3)").hide();
        });
        $("#prev5").click(function () {
            $("section:nth-child(2)").show('fast');
            $("section:nth-child(5)").hide('fast');
        });
    }

    function changeHandlertransfer() {
        // enable next buttun
        $("#onlinepay").val('0');

        $("#next2").click( function () {
            $("section:nth-child(3)").show('fast');
            $("section:nth-child(2)").hide('fast');
            $("section:nth-child(5)").hide();
        });
        $("#prev5").click(function () {
            $("section:nth-child(2)").show('fast');
            $("section:nth-child(3)").hide('fast');
        });

        document.getElementById("checkBoxField").checked = false;
        $("input#next2").removeClass('prev');
        $("input#next2").prop("disabled", false);
        $("#next2").click( function () {
            // window.location.assign('?tranfer=true');
        });
    }
    // linear-gradient(10deg, rgb(222, 129, 62) 0%, rgb(222, 199, 85) 100%)

    // theme = new Theme("nigeriaQueen");
    // const button = document.querySelector('button');
    // const sButton = document.querySelector('button > .bubbly-button2');
    // let black = "#0c0c0c";
    // theme.buttons(button, black);
    // theme.specialButtons(sButton, black);

    // VALIDATE BANKTRANSFER
    $('input').on("focus", function() {
        $(this).on("change", function () {
            if ($("input#bankname").val() != '' && $("input#actname").val() != '' && $("input#actnumber").val() != ''){
                $("input#next4").removeClass('prev');
                $("input#next4").prop("disabled", false);
                $(".error").html("");
            } else{
                $("input#next4").addClass('prev');
                $("input#next4").prop("disabled", true);
                $(".error").html("This field is required");
                // console.log('theres an empty input');
                return false
            }
        });
    });
    // VALIDATE BANKTRANSFER
    $('input').on("focus", function() {
        $(this).on("change", function () {
            if ($("input#firstname").val() != '' && $("input#lastname").val() != '' && $("input#email").val() != ''){
                $("input#next5").removeClass('prev');
                $("input#next5").prop("disabled", false);
                $(".error").html("");
            } else{
                $("input#next5").addClass('prev');
                $("input#next5").prop("disabled", true);
                $(".error").html("This field is required");
                // console.log('theres an empty input');
                return false
            }
        });
    });

</script>

<script>
    let contestantCode = getUrlVars()["q"];
    let totalAmount = getUrlVars()["totalAmount"];
    let voteCount = getUrlVars()["voteCount"];
    let emailAddress = getUrlVars()["email"];
    let fname = getUrlVars()["firstname"];
    let lname = getUrlVars()["lastname"];

    const tk_key = config.PAYSTACK_PUBLIC_KEY;
    function payWithPaystack(){
        var handler = PaystackPop.setup({
            key: tk_key,
            email: '<?php echo $emailAddress;?>',
            amount: totalAmount * 100,
            firstname: fname,
            lastname: lname,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Total Votes",
                        variable_name: "total_votes",
                        value: voteCount
                    }
                ],
                custom_fields: [
                    {
                        display_name: "Contestant PseudoCode",
                        variable_name: "pseudocode",
                        value: contestantCode
                    }
                ]
            },
            callback: function(response){
                var res = response.reference;
                paymentSuccess(res);
            },
            onClose: function(){
                cancelPayment();
            }
        });
        handler.openIframe();
    }

    function paymentSuccess(response){
        window.location.assign('?success=voted&contestant='+contestantCode+'&amount='+totalAmount+'&count='+voteCount+'&email='+emailAddress+'&fname='+fname+'&lname='+lname+'&ref='+response);
    }

    function cancelPayment(){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'No, continue!',
            cancelButtonText: 'Yes, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                payWithPaystack();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Leaving? Please Come back soon!',
                    'error'
                )
                window.location.assign('?q='+sessionStorage.getItem('contestant'))
            }
        });
    }

    if (queryParameters().payment === "1"){
        payWithPaystack();
    }
    if (queryParameters().thankyou === "1"){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your vote was Successful!',
            showConfirmButton: false,
            timer: 6000
        })
    }
    if (queryParameters().tranfer === "1"){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Success!',
            text: 'Please note your vote will reflect once payment is verified.',
            showConfirmButton: false,
            timer: 7000
        })
    }


    function myFunction() {
        var input, filter, cards, cardContainer, h2, title, i;
        input = document.getElementById("myFilter");
        filter = input.value.toUpperCase();
        cardContainer = document.getElementById("contestantCards");
        cards = cardContainer.querySelector(".col-md-3 .col-sm-6 .col-xs-12 .mb-5");
        for (i = 0; i < cards.length; i++) {
            title = cards[i].querySelector(".music-card .playing h2.title div.info h2.title vote-result");
            if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                cards[i].style.display = "";
            } else {
                cards[i].style.display = "none";
            }
        }
    }
</script>
</body>
</html>