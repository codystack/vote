class Theme {
    constructor(x) {
        this.themename = x;
    }
    buttons (btnName, btnColor){
        return btnName.style.setProperty("background-color", btnColor, "important");
    }
    // specialButtons (btnName, btnColor){
    //     return btnName.style.setProperty("background-color", btnColor, "important");
    // }
    // background (x){
    //
    // }
    // text (x){
    //
    // }
}


function changeHandler(){
    // $("#submit")[0].click();
    $(".actions li[aria-disabled=\"false\"] ~ li a").click( function () {

        $('#contestant').html(
            "<div class=\"wrapper\">\n" +
            "<form id=\"wizard\" role=\"application\" class=\"wizard clearfix\"><div class=\"steps clearfix\"><ul role=\"tablist\"><li role=\"tab\" aria-disabled=\"false\" class=\"first done checked\" aria-selected=\"false\"><a id=\"wizard-t-0\" href=\"#wizard-h-0\" aria-controls=\"wizard-p-0\"><span class=\"number\">1.</span> </a></li><li role=\"tab\" aria-disabled=\"false\" class=\"checked done\" aria-selected=\"false\"><a id=\"wizard-t-1\" href=\"#wizard-h-1\" aria-controls=\"wizard-p-1\"><span class=\"number\">2.</span> </a></li><li role=\"tab\" aria-disabled=\"false\" class=\"checked done\" aria-selected=\"false\"><a id=\"wizard-t-2\" href=\"#wizard-h-2\" aria-controls=\"wizard-p-2\"><span class=\"number\">3.</span> </a></li><li role=\"tab\" aria-disabled=\"false\" class=\"last current checked\" aria-selected=\"true\"><a id=\"wizard-t-3\" href=\"#wizard-h-3\" aria-controls=\"wizard-p-3\"><span class=\"current-info audible\">current step: </span><span class=\"number\">4.</span> </a></li></ul></div><div class=\"content clearfix\">\n" +
            "<!-- SECTION 1 -->\n" +
            "<h2 id=\"wizard-h-0\" tabindex=\"-1\" class=\"title\"></h2>\n" +
            "<section id=\"wizard-p-0\" role=\"tabpanel\" aria-labelledby=\"wizard-h-0\" class=\"body\" aria-hidden=\"true\" style=\"display: none;\">\n" +
            "<div class=\"inner\">\n" +
            "<div class=\"image-holder\">\n" +
            "<img class=\"constant-img\" src=\"https://i.imgur.com/b2ZMlsd.jpg\" height=\"521\" alt=\"\">\n" +
            "</div>\n" +
            "<div class=\"form-content\">\n" +
            "<div class=\"form-header\">\n" +
            "<h3>Vote for Juliet</h3>\n" +
            "</div>\n" +
            "<p>Select or input number of votes</p>\n" +
            "<div style=\"text-align: center;\">\n" +
            "<div class=\"input-group mba mb-4\">\n" +
            "<div class=\"input-group-prepend\">\n" +
            "<label class=\"input-group-text\">Vote(s)</label>\n" +
            "<input id=\"display\" type=\"text\" class=\"px-3\" value=\"1\" disabled=\"\">\n" +
            "<input id=\"display\" type=\"hidden\" value=\"1\" name=\"voteCount\">\n" +
            "<input type=\"button\" value=\"+\" id=\"inc\" onclick=\"incNumber()\">\n" +
            "<input type=\"button\" value=\"-\" id=\"dec\" onclick=\"decNumber()\">\n" +
            "</div>\n" +
            "</div>\n" +
            "</div>\n" +
            "<!-- The amount should increse when the numbers go up and vice versa -->\n" +
            "<h4 style=\"color: #0a0c0d; margin-bottom: 1rem;\">Amount: ₦<span id=\"total-amount\">50</span></h4>\n" +
            "<p>Please note that each vote cost ₦50 and,<br> a minimum of 5 votes is required.\n" +
            "</p>\n" +
            "</div>\n" +
            "</div>\n" +
            "</section>\n" +
            "\n" +
            "<!-- SECTION 2 -->\n" +
            "<h2 id=\"wizard-h-1\" tabindex=\"-1\" class=\"title\"></h2>\n" +
            "<section id=\"wizard-p-1\" role=\"tabpanel\" aria-labelledby=\"wizard-h-1\" class=\"body\" aria-hidden=\"true\" style=\"display: none;\">\n" +
            "<div class=\"inner\">\n" +
            "<div class=\"image-holder\">\n" +
            "<img class=\"constant-img\" src=\"https://i.imgur.com/b2ZMlsd.jpg\" alt=\"\" height=\"521\">\n" +
            "</div>\n" +
            "<div class=\"form-content\">\n" +
            "<div class=\"form-header\">\n" +
            "<h3>Mode of Payment</h3>\n" +
            "</div>\n" +
            "<p>Please select how you want to pay</p>\n" +
            "<div class=\"paycon d-flex\">\n" +
            "<div class=\"caption p-4\">\n" +
            "<img src=\"https://i.imgur.com/6oy946q.png\" height=\"58\">\n" +
            "<p class=\"mt-3\"><input type=\"checkbox\" id=\"checkBoxField\" onchange=\"changeHandler()\">  Pay online</p>\n" +
            "</div>\n" +
            "<div class=\"caption p-4\">\n" +
            "<img src=\"https://i.imgur.com/2kAAycz.png\" height=\"58\">\n" +
            "<p class=\"mt-3\"><input type=\"checkbox\">  Bank transfer/Deposit</p>\n" +
            "</div>\n" +
            "</div>\n" +
            "</div>\n" +
            "</div>\n" +
            "</section>\n" +
            "<!-- SECTION 3 -->\n" +
            "<h2 id=\"wizard-h-2\" tabindex=\"-1\" class=\"title\"></h2>\n" +
            "<section id=\"wizard-p-2\" role=\"tabpanel\" aria-labelledby=\"wizard-h-2\" class=\"body\" aria-hidden=\"true\" style=\"display: none;\">\n" +
            "<div class=\"inner\">\n" +
            "<div class=\"image-holder\">\n" +
            "<img class=\"constant-img\" src=\"https://i.imgur.com/b2ZMlsd.jpg\" alt=\"\" height=\"521\">\n" +
            "</div>\n" +
            "<div class=\"form-content\">\n" +
            "<div class=\"form-header\">\n" +
            "<h3>Make Payment</h3>\n" +
            "</div>\n" +
            "<p>Make a payment of ₦<span id=\"total-payment\">50</span> to the account below</p>\n" +
            "<table class=\"table table-striped\">\n" +
            "<tbody>\n" +
            "<tr>\n" +
            "<th scope=\"row\">Bank:</th>\n" +
            "<td>Zenith Bank</td>\n" +
            "</tr>\n" +
            "<tr>\n" +
            "<th scope=\"row\">Account name:</th>\n" +
            "<td>Contagious Agency LTD</td>\n" +
            "</tr>\n" +
            "<tr>\n" +
            "<th scope=\"row\">Account number:</th>\n" +
            "<td colspan=\"2\">1016160074</td>\n" +
            "</tr>\n" +
            "</tbody>\n" +
            "</table>\n" +
            "</div>\n" +
            "</div>\n" +
            "</section>\n" +
            "\n" +
            "<!-- SECTION 4 -->\n" +
            "<h2 id=\"wizard-h-3\" tabindex=\"-1\" class=\"title current\"></h2>\n" +
            "<section id=\"wizard-p-3\" role=\"tabpanel\" aria-labelledby=\"wizard-h-3\" class=\"body current\" aria-hidden=\"false\" style=\"\">\n" +
            "<div class=\"inner\">\n" +
            "<div class=\"image-holder\">\n" +
            "<img class=\"constant-img\" src=\"https://i.imgur.com/b2ZMlsd.jpg\" alt=\"\" height=\"521\">\n" +
            "</div>\n" +
            "<div class=\"form-content\">\n" +
            "<div class=\"form-header\">\n" +
            "<h3>Enter your details</h3>\n" +
            "</div>\n" +
            "<p>Please Fill all field to complete your voting.</p>\n" +
            "<div class=\"form-row\">\n" +
            "<div class=\"form-holder\">\n" +
            "<input id=\"fname\" type=\"text\" placeholder=\"First Name\" class=\"form-control\">\n" +
            "</div>\n" +
            "<div class=\"form-holder\">\n" +
            "<input id=\"lname\" type=\"text\" placeholder=\"Last Name\" class=\"form-control\">\n" +
            "</div>\n" +
            "</div>\n" +
            "<div class=\"form-row\">\n" +
            "<div class=\"form-holder w-100\">\n" +
            "<input id=\"email\" type=\"text\" placeholder=\"Email Address\" class=\"form-control\">\n" +
            "<button id=\"submitbtn\" type=\"submit\"></button>\n" +
            "</div>\n" +
            "</div>\n" +
            "</div>\n" +
            "</div>\n" +
            "</section>\n" +
            "</div><div class=\"actions clearfix\"><ul role=\"menu\" aria-label=\"Pagination\"><li class=\"\" aria-disabled=\"false\"><a href=\"#previous\" role=\"menuitem\">Back</a></li><li aria-hidden=\"true\" aria-disabled=\"true\" class=\"disabled\" style=\"display: none;\"><a href=\"#next\" role=\"menuitem\">Next</a></li><li aria-hidden=\"false\" style=\"\"><a href=\"#finish\" role=\"menuitem\">Submit</a></li></ul></div></form>\n" +
            "</div>\n"
        );

        // $(".actions li[aria-disabled=\"false\"] ~ li a[href=\"#finish\"]").click( function () {
        //     // alert("yay! you are done!");
        //     $("#submitbtn")[0].click();
        // });
    });
}


let i = 1;
let total = 50;
// total-payment

const amount = document.getElementById("total-amount");
const paymentAmount = document.getElementById("total-payment");

function incNumber() {
    if (i < 10) {
        i++;
    } else if (i = 10) {
        i = 0;
    }
    document.getElementById("display").value = i;
    document.getElementById("total-amount").innerHTML = total * i;
    document.getElementById("total-payment").innerHTML = total * i;
}

function decNumber() {
    if (i > 0) {
        --i;
    } else if (i = 0) {
        i = 10;
    }
    document.getElementById("display").value = i;
    document.getElementById("total-amount").innerHTML = total * i;
    document.getElementById("total-payment").innerHTML = total * i;
}
amount.innerText = total;
paymentAmount.innerText = total;
// amount_to_pay = amount.innerText;


// FOR FLUTERWAVE PAYMENT

document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#checkBoxField').addEventListener('change', changeHandler);
});

document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById("submit").addEventListener("click", function(e) {
        var PBFKey = "FLWPUBK_TEST-8c932bd866633307fa46e7544b6a9323-X";
        const fname = document.getElementById("fname").value;
        const lname = document.getElementById("lname").value;
        const email = document.getElementById("email").value;

        getpaidSetup({
            PBFPubKey: PBFKey,
            customer_email: email,
            customer_firstname: fname,
            customer_lastname: lname,
            custom_description: "Pay Internet",
            custom_logo: "https://pstk-integration-logos.s3-eu-west-1.amazonaws.com/cccaab9a-e1bd-4d4e-b133-84dff5f6b74d",
            custom_title: "Nigerian Queen",
            amount: total,
            country: "NG",
            currency: "NGN",
            txref: "rave-123456",
            // integrity_hash: "6800d2dcbb7a91f5f9556e1b5820096d3d74ed4560343fc89b03a42701da4f30",
            onclose: function() {},
            callback: function(response) {
                var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a 					server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }
            }
        });
    });
});
