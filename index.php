<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="public/css/reset.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="public/css/defaults.css" type="text/css" media="screen, projection" />
    <!--[if lt IE 8]><link rel="stylesheet" href="public/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

    <link rel="stylesheet" href="public/css/style.css" type="text/css" media="screen, projection" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script type='text/javascript' src='public/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='public/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='public/js/superfish.js?ver=4.9.8'></script>
    <script type='text/javascript' src='public/js/jquery.mobilemenu.js?ver=4.9.8'></script>

    <script src="public/js/jquery.cycle.all.js" type="text/javascript"></script>

    <?php if($_GET['id']=="locking-wheel-nut-removal-peterhead"){ ?>
<title>Blackhills Tyres | Locking Wheel Nut Removal</title>
<?php } ?>
<?php if($_GET['id']=="motorcycle-parts-in-peterhead"){ ?>
<title>Blackhills Tyres | Motorcycle Parts</title>
<?php } ?>
<?php if($_GET['id']=="motorcycle-tyres-in-peterhead"){ ?>
<title>Blackhills Tyres | Motorcycle Tyres</title>
<?php } ?>
<?php if($_GET['id']=="tpms-sensor-valves"){ ?>
<title>Blackhills Tyres | TPMS</title>
<?php } ?>
<?php if($_GET['id']=="contact-us"){ ?>
<title>Blackhills Tyres | Contact Us</title>
<?php } ?>

  </head>
  <body class="home page-template page-template-page-template-full page-template-page-template-full-php page page-id-164" style="background: #181818 url('public/media/background.jpg') center top no-repeat fixed;">
    <?php  include("includes/header.php"); ?>
      <?php  include("includes/slider.php"); ?>

      <?php if($_GET['id']=="locking-wheel-nut-removal-peterhead"){
        include("includes/wnr.php");
      }elseif ($_GET['id']=="motorcycle-parts-in-peterhead"){
        include("includes/parts.php");
      }elseif ($_GET['id']=="motorcycle-tyres-in-peterhead"){
        include("includes/biketyres.php");
      }elseif ($_GET['id']=="tpms-sensor-valves"){
        include("includes/sensors.php");
      }elseif ($_GET['id']=="contact-us"){
        include("includes/contact.php");
      }else{
        include("includes/home.php");
      }

        ?>


      <?php  include("includes/footer.php"); ?>

  </body>
</html>
