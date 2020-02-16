<?php
    require_once ("../config/db.php");
    require_once ("../controller/auth_controller.php");

    if (!isset($_SESSION['admin_session'])){
        header("Location: index");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Dashboard :: Vote Online&trade;
  </title>
  <!-- Favicon -->
  <link href="https://i.imgur.com/kVguEsz.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/voteonline-dashboard.css?v2.1.2" rel="stylesheet" />
    <link href="./assets/css/custom.css" rel="stylesheet" />
</head>
<body class="">