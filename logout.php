<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

session_unset();

// destroy the session
session_destroy();

?>


<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Thanks For Using Our Application">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Log Out</title>
  <link rel="stylesheet" href="css2/nicepage.css" media="screen">
  <link rel="stylesheet" href="css2/Log-Out.css" media="screen">
  <script class="u-script" type="text/javascript" src="css2/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="css2/nicepage.js" defer=""></script>
  <link rel="icon" href="images/favicon.jpg">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <style>
    * {

      overflow: hidden;
    }
  </style>

 
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Log Out">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
 
  <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_5b86" data-image-width="1618" data-image-height="1080">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/e65f6cc4f82d97dcfd954b67ae60e76839a4a9ebd732344e7a5afff57287365458c7805865a884022722969b262a135d8b88ec171b3aa71cbc013e_1280.png" alt="" data-image-width="150" data-image-height="135">
      <h1 class="u-custom-font u-font-raleway u-text u-text-body-alt-color u-title u-text-1">Thanks For Using Our
        Application</h1>
    </div>
  </section>


 
  <script>
    setTimeout(function() {
      window.location.href = "index.php";
    }, 5000);
//   </script>

</body>

</html>