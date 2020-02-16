<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
    <style>
        /* Container */
        .container{
            margin: 0 auto;
            border: 0px solid black;
            width: 50%;
            height: 250px;
            border-radius: 3px;
            background-color: ghostwhite;
            text-align: center;
        }
        /* Preview */
        .preview{
            width: 100px;
            height: 100px;
            border: 1px solid black;
            margin: 0 auto;
            background: white;
        }

        .preview img{
            display: none;
        }
        /* Button */
        .button{
            border: 0px;
            background-color: deepskyblue;
            color: white;
            padding: 5px 15px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <form method="get" action="" enctype="multipart/form-data" id="myform">
        <div class='preview'>
            <img id="img" width="100" height="100">
        </div>
        <div >
            <input type="file" id="file" name="file" />
            <input type="button" class="button" value="Upload" id="but_upload">
        </div>
    </form>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function(){

        $("#but_upload").click(function(){

            var fd = new FormData();
            var files = $('#file')[0].files[0];
            fd.append('file',files);

            $.ajax({
                url: 'controller/file_upload_parser.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        $("#img").attr("src",response);
                        $(".preview img").show(); // Display image element
                    }else{
                        alert('file not uploaded');
                    }
                },
            });
        });
    });
</script>
</body>
</html>