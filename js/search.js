jQuery(document).ready(function($) {
  "use strict";


  $('#searchForm').submit(function() {

      let form = $(this);
      let str = form.serialize();
      let action = form.attr('action');


      $.ajax({

        type: "POST",
        url: action,
        data: str,
        success: function(jsonData) {

          jsonData = JSON.parse(jsonData);
          if (jsonData.res == 'OK') {

            let cardsContainer = $('.container-xl.row').empty();
            jsonData.search.forEach(function (contestant_html) {

              cardsContainer.append(contestant_html);

            });
            console.log('OK');

          } else if (jsonData.res == 'NONE') {

            console.log('NONE');

          } else {

            console.log(jsonData);

          };

        },
        error: function() {

          console.log('error occured')

        }

      });
      return false;

  });

});
