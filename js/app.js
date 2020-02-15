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

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function queryParameters () {
    var result = {};
    var params = window.location.search.split(/\?|\&/);
    params.forEach( function(it) {
        if (it) {
            var param = it.split("=");
            result[param[0]] = param[1];
        }
    });
    return result;
}

let i = 1;
let total = 50;
// total-payment

const amount = document.getElementById("total-amount");
const paymentAmount = document.getElementById("total-payment");

function incNumber() {
    if (i < 1000000) {
        i++;
    } else if (i = 1000000) {
        i = 0;
    }
    document.getElementById("display").value = i;
    document.getElementById("count").value = i;
    document.getElementById("total-amount").innerHTML = total * i;
    document.getElementById("total-payment").innerHTML = total * i;
    document.getElementById("total").value = total * i;
}

function decNumber() {
    if (i > 0) {
        --i;
    } else if (i = 0) {
        i = 1000000;
    }
    document.getElementById("display").value = i;
    document.getElementById("count").value = i;
    document.getElementById("total-amount").innerHTML = total * i;
    document.getElementById("total-payment").innerHTML = total * i;
    document.getElementById("total").value = total * i;
}
amount.innerText = total;
paymentAmount.innerText = total;
// amount_to_pay = amount.innerText;
