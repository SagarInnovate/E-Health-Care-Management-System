<?php

$patientData="";
if(!isset($_GET['action'])){
    echo '<script type="text/javascript">
           window.location = "panel.php?action=dashboard"
      </script>';
}

$name=$_SERVER["PHP_SELF"];
$filename = basename(parse_url('http://localhost/'.$name)['path']);
if($filename=="panel.php" && $_GET["action"]=='dashboard'){
    include_once "forms/dashboard.php";
    die();
  }
  elseif ($filename=="panel.php" && $_GET["action"]=='history') {
    include_once "forms/history.php";
    die();

  }
?>

<section class="u-clearfix u-section-1" id="sec-eced">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                  <div
                    class="u-container-style u-custom-item u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-1"
                    data-href="panel.php?action=dashboard">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-1">Dashboard</p>
                    </div>
                  </div>
                  <div  data-href="panel.php?action=add_patient"
                    class="u-container-style u-custom-item u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-2">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-2"> Add New Patient</p>
                    </div>
                  </div>
                  <div data-href="panel.php?action=add_diagonosis"
                    class="u-container-style u-custom-item u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-3"> Add Diagonosis Info</p>
                    </div>
                  </div>
                  <div data-href="panel.php?action=history"
                    class="u-container-style u-custom-item u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-4">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-4">History</p>
                    </div>
                  </div>
                  <div data-href="panel.php?action=bill"
                    class="u-container-style u-custom-item u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-5">Bill</p>
                    </div>
                  </div>
                  <div data-href="mailto:sgshinde612@gmail.com?subject=[ REPLACE THIS WITH YOUR SUBJECT ]&body=Just%20saying%20hi!"
                    class="u-container-style u-custom-item u-list-item u-palette-5-light-3 u-radius-10 u-repeater-item u-shape-round u-list-item-6">
                    <div class="u-container-layout u-similar-container u-container-layout-7">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-6">Help</p>
                    </div>
                  </div>
                  <div data-href="logout.php"
                    class="u-container-style u-custom-color-1 u-custom-item u-list-item u-radius-10 u-repeater-item u-shape-round u-list-item-7">
                    <div class="u-container-layout u-similar-container u-container-layout-8">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-7">Log-Out</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <?php
          if($filename=="panel.php" && $_GET["action"]=='add_patient'){
            include_once "forms/add_patient.php";
          }
          elseif($filename=="panel.php" && $_GET["action"]=='add_diagonosis'){
            include_once "forms/add_diagnosis.php";
          }
          elseif ($filename=="panel.php" && $_GET["action"]=='bill') {
            include_once "forms/bill.php";
          }  
         
        
          else{
            echo "hello guys";
          }
          
          ?>

        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">

function losingfocus() {

  var input_value = document.getElementById("text-fbf9").value; 

  window.location.href = "panel.php?action=add_diagonosis&id=" + input_value; 

}

function losingfocusBill() {

var input_value = document.getElementById("text-8350").value; 

window.location.href = "panel.php?action=bill&id=" + input_value; 

}

function enterKeyPressedwcps(event) {
      if (event.keyCode == 13) {
        alert("Are You Sure About Ward Charges Per Day?"); // im showing just alert for losing focus 
      }
    }

    function losingfocuswcpd() {
      var id = document.getElementById("text-8350").value;
      var nodps = document.getElementById("name-b832").value;
      var wcpd = document.getElementById("text-e4f9").value;
      var twc=parseInt(nodps)*parseInt(wcpd);
      window.location.href = "panel.php?action=bill&id=" + id + "&wcpd=" + wcpd + "&nodps=" + nodps+"&twc=" + twc;

    }


    function losingfocussc(){
      var id = document.getElementById("text-8350").value;
      var nodps = document.getElementById("name-b832").value;
      var wcpd = document.getElementById("text-e4f9").value;
      var df = document.getElementById("text-71d3").value;
      var sc = document.getElementById("text-6ff0").value;
      var twc=parseInt(nodps)*parseInt(wcpd);
      var ta=twc+parseInt(df)+parseInt(sc);
      window.location.href = "panel.php?action=bill&id=" + id + "&wcpd=" + wcpd + "&nodps=" + nodps+"&twc=" + twc+"&df=" + df+"&sc=" + sc+"&ta=" + ta;

    }

    function bills(){
      alert("bill Created Successfully");
    }

</script>