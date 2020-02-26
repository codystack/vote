<?php
require_once ('config/db.php');
require_once ('controller/auth_controller.php');

//GET VISTORS
/*user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = mysqli_query($conn, "SELECT visitorip FROM traffic WHERE page ='home' and visitorip ='$user_ip'");
if(mysqli_num_rows($check_ip) >=1)
{
    //not unique user
}
else
{
    $insertQuery = mysqli_query($conn, "INSERT INTO traffic (page, visitorip) VALUE ('home','$user_ip')");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vote Online&trade; :: Nigeria's 1st Online voting platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

    <link rel="stylesheet" href="css/pay.css">
    <!-- SEARCH -->
    <link href="css/search.css" rel="stylesheet" />
    <link href="css/bubble-button.css" rel="stylesheet" />
    <!-- PAY -->
    <link href="css/wavepaybg.css" rel="stylesheet" />
    <link href="css/contestants.css" rel="stylesheet" />

    <link href="css/wavebg.css" rel="stylesheet" />

    <link href="css/contestants.css" rel="stylesheet">

    <!-- STYLE CSS -->
<!--    <link rel="stylesheet" href="scss/style.css">-->
    <link rel="stylesheet" href="css/maps/style.css.map">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://i.imgur.com/kVguEsz.png" rel="icon" type="image/png">
    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>
<body>
