class Theme {
    constructor(x) {
        this.themename = x;
    }
    buttons (btnName, btnColor){
        return btnName.style.setProperty("background-color", btnColor, "important");
    }
    specialButtons (btnName, btnColor){
        return btnName.style.setProperty("background-color", btnColor, "important");
    }
    background (x){

    }
    text (x){

    }
}



// const contestant = document.querySelector('');
$('#contestant').append("<div class=\"wrapper\">\n" +
    "<form action=\"\" id=\"wizard\">\n" +
    "<!-- SECTION 1 -->\n" +
    "<h2></h2>\n" +
    "<section>\n" +
    "<div class=\"inner\">\n" +
    "<div class=\"image-holder\">\n" +
    "<img class=\"constant-img\" src=\"https://i.imgur.com/b2ZMlsd.jpg\" height=\"521\" alt=\"\">\n" +
    "</div>\n" +
    "\n" +
    "<div class=\"form-content\" >\n" +
    "<div class=\"form-header\">\n" +
    "<h3>Vote for Juliet</h3>\n" +
    "</div>\n" +
    "<p>Select or input number of votes</p>\n" +
    "\n" +
    "<div style=\"text-align: center;\">\n" +
    "<div class=\"input-group mba\">\n" +
    "<div class=\"input-group-prepend\">\n" +
    "<label class=\"input-group-text\">Vote(s)</label>\n" +
    "<input id=\"display\" type=\"text\" class=\"px-3\" value='1' disabled>\n" +
    "<input id=\"display\" type=\"hidden\" value='1' name=\"voteCount\">\n" +
    "<input type=\"button\" value=\"+\" id=\"inc\" onclick=\"incNumber()\"/>\n" +
    "<input type=\"button\" value=\"-\" id=\"dec\" onclick=\"decNumber()\"/>\n" +
    "</div>\n" +
    "</div>\n" +
    "</div>\n" +
    "<!-- The amount should increse when the numbers go up and vice versa -->\n" +
    "<h4>Amount: &#8358;<span id=\"total-amount\"></span></h4>\n" +
    "\n" +
    "<p>Please note that each vote cost ₦50 and,<br> a minimum of 5 votes is required.\n" +
    "</p>\n" +
    "\n" +
    "</div>\n" +
    "</div>\n" +
    "</section>\n" +
    "\n" +
    "<!-- SECTION 2 -->\n" +
    "<h2></h2>\n" +
    "<section>\n" +
    "<div class=\"inner\">\n" +
    "<div class=\"image-holder\">\n" +
    "<img src=\"images/form-wizard-1.jpg\" alt=\"\">\n" +
    "</div>\n" +
    "<div class=\"form-content\">\n" +
    "<div class=\"form-header\">\n" +
    "<h3>Mode of Payment</h3>\n" +
    "</div>\n" +
    "<p>Please select how you want to pay</p>\n" +
    "<div class=\"paycon d-flex\">\n" +
    "<div class=\"caption p-4\">\n" +
    "<img src=\"https://i.imgur.com/6oy946q.png\" height=\"58\"/>\n" +
    "<p class=\"mt-3\"><input type=\"checkbox\">  Pay online</p>\n" +
    "</div>\n" +
    "<div class=\"caption p-4\">\t\t\t\t\n" +
    "<img src=\"https://i.imgur.com/2kAAycz.png\" height=\"58\" />\n" +
    "<p class=\"mt-3\"><input type=\"checkbox\">  Bank transfer/Deposit</p>\n" +
    "</div>\n" +
    "\n" +
    "</div>\n" +
    "</div>\n" +
    "</div>\n" +
    "</section>\n" +
    "\n" +
    "<!-- SECTION 3 -->\n" +
    "<h2></h2>\n" +
    "<section>\n" +
    "<div class=\"inner\">\n" +
    "<div class=\"image-holder\">\n" +
    "<img src=\"images/form-wizard-1.jpg\" alt=\"\">\n" +
    "</div>\n" +
    "<div class=\"form-content\">\n" +
    "<div class=\"form-header\">\n" +
    "<h3>Make Payment</h3>\n" +
    "</div>\n" +
    "<p>Make a payment of &#8358;<span id=\"total-payment\"></span> to the account below</p>\n" +
    "\n" +
    "\n" +
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
    "\n" +
    "\n" +
    "</div>\n" +
    "</div>\n" +
    "</section>\n" +
    "\n" +
    "\n" +
    "<!-- SECTION 4 -->\n" +
    "<h2></h2>\n" +
    "<section>\n" +
    "<div class=\"inner\">\n" +
    "<div class=\"image-holder\">\n" +
    "<img src=\"images/form-wizard-1.jpg\" alt=\"\">\n" +
    "</div>\n" +
    "<div class=\"form-content\">\n" +
    "<div class=\"form-header\">\n" +
    "<h3>Payment details</h3>\n" +
    "</div>\n" +
    "<p>Fill in depositor's account details of the account. For bank deposit, fill in deposit slip details for confirmation.</p>\n" +
    "<div class=\"form-row\">\n" +
    "<div class=\"form-holder w-100\">\n" +
    "<input type=\"text\" placeholder=\"Bank\" class=\"form-control\">\n" +
    "</div>\n" +
    "</div>\n" +
    "<div class=\"form-row\">\n" +
    "<div class=\"form-holder\">\n" +
    "<input type=\"text\" placeholder=\"Account Name\" class=\"form-control\">\n" +
    "</div>\n" +
    "<div class=\"form-holder\">\n" +
    "<input type=\"text\" placeholder=\"Account Number\" class=\"form-control\">\n" +
    "</div>\n" +
    "</div>\n" +
    "</div>\n" +
    "</div>\n" +
    "</section>\n" +
    "</form>\n" +
    "</div>");


let i = 1;
let total = 50;
// total-payment

const amount = document.getElementById("total-amount");

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
// amount_to_pay = amount.innerText;
