<?php

session_start();
if (isset($_SESSION["username"])) {
  header("Location: panel.php");
}
if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  $password =  $_POST["password"];
  if ($username == "" or $password == "") {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Ohh 😮!</strong> Please fill all the required fields
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  } elseif ($username == "dr.shinde" and $password == "sagar@123") {
    $_SESSION["username"] = "admin";
    //  echo $_SESSION["username"];

  ?>
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
      <strong>Success! </strong> Loading E-Health Care Panel....Please Wait......
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <script>
      setTimeout(function() {
        window.location.href = "panel.php";
      }, 3000);
    </script>
  <?php

  } else {
  ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>OHH No! </strong> You Enter Wrong Username Or Password.......Please Try Again....
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>



<?php
  }
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​&nbsp; E-HEALTH CARE MANAGEMENT SYSTEM">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Home</title>
  <link rel="stylesheet" href="css2/nicepage.css" media="screen">
  <link rel="stylesheet" href="css2/Home.css" media="screen">
  <script class="u-script" type="text/javascript" src="css2/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="css2/nicepage.js" defer=""></script>
  <link rel="icon" href="images/favicon.jpg">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

  <style>
    * {

      /*overflow-y: auto;*/
      overflow: hidden;
    }
  </style>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "E-Health Care",
      "sameAs": [
        "index.php",
        "index.php",
        "index.php"
      ]
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body data-home-page="index.php" data-home-page-title="Home" class="u-body">
  <section class="u-clearfix u-section-1" id="carousel_6f88">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">
        <div class="u-layout-row">
          <div class="u-size-32">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-white u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1" style="background: #f2f2f2;">
                  <h5 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-1"> WELCOME TO</h5>
                  <h1 class="u-custom-font u-font-playfair-display u-text u-text-2"> &nbsp; SHINDE SUPERSPECIALITY HOSPITAL</h1>
                  <div class="u-expanded-width u-form u-form-1">
                    <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-17 u-form-vertical u-inner-form" style="padding: 11px;" source="custom" name="form" redirect="true">
                      <div class="u-form-group u-form-group-1">
                        <label for="email-cd2c" class="u-form-control-hidden u-label">Email</label>
                        <input type="text" value='dr.shinde' placeholder="Enter Username......" id="email-cd2c" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1" required="required">
                      </div>
                      <div class="u-form-group u-form-group-2">
                        <label for="text-517b" class="u-form-control-hidden u-label"></label>
                        <input value='sagar@123' type="password" placeholder="Enter Password....." id="text-517b" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2" required>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit u-form-group-3">
                        <a href="#" class="u-active-grey-75 u-black u-border-1 u-border-active-grey-75 u-border-black u-border-hover-grey-75 u-btn u-btn-submit u-button-style u-hover-grey-75 u-btn-1">Login<br>
                        </a>
                        <input type="submit" value="submit" name="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success">Login Successful.......</div>
                      <div class="u-form-send-error u-form-send-message">Invalid Login.....Try Again</div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                  <p class="u-custom-font u-font-montserrat u-text u-text-3"> 
                  "every human being is author of his own health or disease"<br>
                  - DR.Shinde.S.G
                 </p>
                  <div class="u-align-center u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" target="_blank" href="index.php" title="Home"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cda9"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-cda9">
                          <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z">
                          </path>
                        </svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href="index.php" title="Home"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-af41"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-af41">
                          <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z">
                          </path>
                        </svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href="index.php" title="Home"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-156b"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-156b">
                          <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z">
                          </path>
                          <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z">
                          </path>
                          <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z">
                          </path>
                        </svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-28">
            <div class="u-layout-col">
              <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" data-image-width="1280" data-image-height="854">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>