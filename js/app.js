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

let i, total, default_amount, vottingMin, vottingMax;
let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {

  if (this.readyState == 4 && this.status == 200) {

    const obj = JSON.parse(this.responseText);
    i = obj.vottingmin;
    vottingMin = obj.vottingmin;
    total = obj.vottingmode;
    default_amount = total * i;
    vottingMax = obj.vottingmax;

  }

};
xmlhttp.open('GET', 'vote_settings.php', false);
xmlhttp.send();

const next_button = document.getElementById("next1");

const amount = document.getElementById("total-amount");
const paymentAmount = document.getElementById("total-payment");

function incNumber() {
    if (i < vottingMax) {
        i++;
    } else if (i == vottingMax) {
        i = 0;
    }
    document.getElementById("display").value = i;
    document.getElementById("count").value = i;
    document.getElementById("total-amount").innerHTML = total * i;
    document.getElementById("total-payment").innerHTML = total * i;
    document.getElementById("total").value = total * i;

    if (parseInt($("#display").val()) == parseInt(vottingMin)) {

      $("input#next1").removeClass('prev');
      $("input#next1").prop("disabled", false);

    } else if (parseInt($("#display").val()) == parseInt(0)) {

      $("input#next1").addClass('prev');
      $("input#next1").prop("disabled", true);

    }

}

function decNumber() {

    if (i > 0) {
        --i;
    } else if (i == 0) {
        i = vottingMax;
    }
    document.getElementById("display").value = i;
    document.getElementById("count").value = i;
    document.getElementById("total-amount").innerHTML = total * i;
    document.getElementById("total-payment").innerHTML = total * i;
    document.getElementById("total").value = total * i;

    if (parseInt($("#display").val()) < vottingMin){

      $("input#next1").addClass('prev');
      $("input#next1").prop("disabled", true);

    } else if (parseInt($("#display").val()) == vottingMax) {

      $("input#next1").removeClass('prev');
      $("input#next1").prop("disabled", false);

    }

}

amount.innerText = default_amount;
paymentAmount.innerText = default_amount;
// amount_to_pay = amount.innerText;

document.querySelector('.custom-file-input').addEventListener('change',function(e){
    var fileName = document.getElementById("myInput").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName
});
