<?php
require "././conn.php";
$totalPatients = '';
$activePatients = '';
$dischargedPatients = '';
$recoveryRatio = '';
$color="";

$sql = "SELECT * FROM dashboard";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
  // Fetch the data from the result set
  $row = mysqli_fetch_assoc($result);

  // Extract the values from the fetched row
  $totalPatients = $row['total_patient'];
  $activePatients = $row['active_patient'];
  $dischargedPatients = $row['discharged'];
  $recoveryRatio = $row['total_recovered'];

}


// Query to get the last maximum 5 records from the patients table
$sql1 = "SELECT * FROM patients ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $sql1);

// Check if the query was successful



?>



<section class="u-clearfix u-section-2" id="carousel_9266">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-1">
            <div class="u-container-layout u-container-layout-1">
              <div class="u-expanded-width u-list u-list-1">
                <!-- <div class="u-repeater u-repeater-1">
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-1">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-1">Dashboard</p>
                    </div>
                  </div>
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-2">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-2"> Add New Patient</p>
                    </div>
                  </div>
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-3"> Add Diagonosis Info</p>
                    </div>
                  </div>
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-4">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-4">History</p>
                    </div>
                  </div>
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-5">Bill</p>
                    </div>
                  </div>
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-6">
                    <div class="u-container-layout u-similar-container u-container-layout-7">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-6">Help</p>
                    </div>
                  </div>
                  <div class="u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-list-item-7">
                    <div class="u-container-layout u-similar-container u-container-layout-8">
                      <p class="u-align-center u-large-text u-text u-text-variant u-text-7">Log-Out</p>
                    </div>
                  </div>
                </div> -->

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
          <div class="u-container-style u-layout-cell u-size-45 u-layout-cell-2">
            <div class="u-container-layout u-container-layout-9">
              <div class="u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                  <div
                    class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-8">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-10">
                      <h3 class="u-align-center u-text u-text-8" data-animation-name="counter"
                        data-animation-event="scroll" data-animation-duration="3000"><?Php echo $totalPatients;  ?></h3>
                      <p class="u-align-center u-text u-text-9">TOTAL PATIENTS</p>
                    </div>
                  </div>
                  <div
                    class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-9">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-11">
                      <h3 class="u-align-center u-text u-text-10" data-animation-name="counter"
                        data-animation-event="scroll" data-animation-duration="3000"><?Php echo $activePatients;  ?></h3>
                      <p class="u-align-center u-text u-text-11">ACTIVE PATIENTS</p>
                    </div>
                  </div>
                  <div
                    class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-10">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-12">
                      <h3 class="u-align-center u-text u-text-12" data-animation-name="counter"
                        data-animation-event="scroll" data-animation-duration="3000"><?Php echo $dischargedPatients;  ?></h3>
                      <p class="u-align-center u-text u-text-13">DISCHARGED PATIENTS</p>
                    </div>
                  </div>
                  <div
                    class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-11">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-13">
                      <h3 class="u-align-center u-text u-text-14" data-animation-name="counter"
                        data-animation-event="scroll" data-animation-duration="3000"><?Php echo $recoveryRatio;  ?>%</h3>
                      <p class="u-align-center u-text u-text-15">RECOVERY RATIO</p>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="u-align-center u-custom-font u-font-lobster u-subtitle u-text u-text-16">Recent Patient</h2>
              <div class="u-table u-table-responsive u-table-1">
               
              <?php

                  if ($result) {
                    echo ' <table class="u-table-entity">
                    <colgroup>
                      <col width="2.5%">
                      <col width="34.2%">
                      <col width="13.6%">
                      <col width="26%">
                      <col width="8.8%">
                      <col width="14.999999999999995%">
                    </colgroup>
                    <thead class="u-black u-table-header u-table-header-1">
                      <tr style="height: 41px;">
                        <th class="u-border-1 u-border-black u-table-cell">ID</th>
                        <th class="u-border-1 u-border-black u-table-cell">Name</th>
                        <th class="u-border-1 u-border-black u-table-cell">Gender</th>
                        <th class="u-border-1 u-border-black u-table-cell">Disease</th>
                        <th class="u-border-1 u-border-black u-table-cell">BILL</th>
                        <th class="u-border-1 u-border-black u-table-cell">Status</th>
                      </tr>
                    </thead><tbody class="u-table-body">';

                    while ($row = mysqli_fetch_assoc($result)) {
                      // Store the record details in variables
                    if($row['status']=='active'){
                      $color="green";
                    }else{
                      $color="red";
                    }
                    

                      echo '<tr style="height: 44px;">
                      <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['id'].'</td>
                      <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['name'].'</td>
                      <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['gender'].'</td>
                      <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['diagnosis'].'</td>
                      <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['total_bill'].'</td>
                      <td style="background-color: '.$color.';color: white;" class="u-border-1 u-border-grey-30 u-table-cell">'.$row['status'].'</td>
                    </tr>';



                    
                    }

                    // Free the result set
                    mysqli_free_result($result);
                  } else {
                    echo "Error retrieving records: " . mysqli_error($conn);
                  }




              ?>
              
              
             
                  
              
                  </tbody>
                </table>
              </div>



              <a href="all_patients_data.php"
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-base u-radius-6 u-btn-1">Show
                All Data</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>