$(document).ready(function() {
    $('#fileToUploadAdd').inputFileText({
        text: 'Add Course Image'
    });
    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
    demo.initChartsPages();
});

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
        title: 'Update was successfully!',
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