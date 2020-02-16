const title_el = document.querySelector("title");

const admin = document.URL.indexOf("index") >= 0;
const dashboard = document.URL.indexOf("dashboard") >= 0;
const contestants_page = document.URL.indexOf("contestants") >= 0;
const verify_payment = document.URL.indexOf("verify-payment") >= 0;
const online_voters = document.URL.indexOf("online-voters") >= 0;
const voters = document.URL.indexOf("offline-voters") >= 0;

const dashboard_nav = document.querySelector("ul li.dashboard");
const contestants_nav = document.querySelector('ul li.contestants');
const verify_payment_nav = document.querySelector('ul li.verify');
const online_voters_nav = document.querySelector('ul li.online_voters');
const voters_nav = document.querySelector('ul li.voters');

if(dashboard || admin){
    title_el.innerHTML = "Dashboard :: Vote Online&trade;";
    dashboard_nav.classList.add('active');
}
if(contestants_page){
    title_el.innerHTML = "Contestants :: Vote Online&trade;";
    contestants_nav.classList.add('active');
}
if(verify_payment){
    title_el.innerHTML = "Verify Transfers :: Vote Online&trade;";
    verify_payment_nav.classList.add('active');
}
if(voters  || online_voters){
    title_el.innerHTML = "Voters :: Vote Online&trade;";
    voters_nav.classList.add('active');
}

$(document).ready(function() {
    let max_fields      = 5; //maximum input boxes allowed
    let wrapper   		= $(".input_fields_wrap"); //Fields wrapper
    let add_button      = $(".add_field_button"); //Add button ID
    let wrapper2   		= $(".input_fields_wrap_2"); //Fields wrapper
    let add_button2     = $(".add_field_button_2"); //Add button ID

    let x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-row"><div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="heading[]" placeholder="heading"/></div></div> <div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="body[]" placeholder="body"/></div></div><a href="#" class="remove_field"><i class="nc-icon nc-simple-remove"></i></a></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });

    // add course outline

    $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper2).append('<div class="form-row"><div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="heading2[]" placeholder="heading"/></div></div> <div class="form-group col"><div class="form-group"><input class="form-control" type="text" name="body2[]" placeholder="body"/></div></div><a href="#" class="remove_field"><i class="nc-icon nc-simple-remove"></i></a></div>'); //add input box
        }
    });

    $(wrapper2).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

//################# CHECK URL PARAM FUNCTION ##################
function queryParameters () {
    let result = {};
    let params = window.location.search.split(/\?|\&/);
    params.forEach( function(it) {
        if (it) {
            let param = it.split("=");
            result[param[0]] = param[1];
        }
    });
    return result;
}
if (queryParameters().add === "true"){
    $('#addContestantsModal').modal('show');
}
if (queryParameters().transferid){
    $('#approveTraferModal').modal('show');
}


// for success or error messages

if (queryParameters().success === "added"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'New Contestant added successfully!',
        showConfirmButton: false,
        timer: 3000
    })
}
if (queryParameters().success === "updated"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Updated was successfully!',
        showConfirmButton: false,
        timer: 3000
    })
}
if (queryParameters().success === "deleted"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Deleted successfully!',
        showConfirmButton: false,
        timer: 3000
    })
}
if (queryParameters().error === "couldnotCreate"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'There was an error, please check your connection!',
        showConfirmButton: false,
        timer: 3000
    })
}
if (queryParameters().error === "notdeleted"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Something went wrong while deleting! please check your connection and try again.',
        showConfirmButton: false,
        timer: 3000
    })
}