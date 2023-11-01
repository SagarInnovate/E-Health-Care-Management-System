<?php
require "././conn.php";
$id='';
if(isset($_GET['id'])){
  $id=$_GET['id'];
}
?>





<section class="u-clearfix u-section-5" id="carousel_d5c8">
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
        <div class="u-container-style u-layout-cell u-size-45 u-layout-cell-2">
          <div class="u-container-layout u-container-layout-9">
            <div class="u-align-center u-form u-form-1">
              <form action="" class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 3px;" redirect="true" method="get">
                <div class="u-form-group u-form-group-1">
                  <label for="text-8350" class="u-form-control-hidden u-label"></label>
                  <input value="<?php echo $id; ?>" required type="text" placeholder="Enter Patient ID" id="text-8350" name="id" class="u-input u-input-rectangle">
                </div>
                <input type="hidden" name="action" value="history">
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Get History Of Patient<br>
                  </a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success">remove me and my blcok.......am im
                  nofification sender</div>
                <div class="u-form-send-error u-form-send-message">remove me and my blcok.......am im
                  nofification sender</div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <div class="u-table u-table-responsive u-table-1">

              <?php
              if (isset($_GET["id"])) {
                $patient_id = $_GET["id"]; // Replace with the desired patient ID

                // SQL query to retrieve data from the patients table for a specific patient ID
                $sql = "SELECT * FROM patients WHERE id = $patient_id";

                // Execute the query
                $result = mysqli_query($conn, $sql);


                // Check if a row is returned
                if (mysqli_num_rows($result) == 1) {
                  // Start creating the HTML table
                  echo '  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <thead class="u-palette-4-base u-table-header u-table-header-1">
                      <tr style="height: 46px;">
                        <th class="u-border-1 u-border-palette-4-base u-table-cell"> KEY </th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell"> VALUE </th>
                      </tr>
                    </thead>';
                  // Fetch the row of data
                  $row = mysqli_fetch_assoc($result);
                  echo ' <tbody class="u-table-body u-table-body-1"  ';
                  // Loop through the column values
                  foreach ($row as $column => $value) {
                    switch ($column) {
                      case 'MDSE':
                        $column = "Any Major Disease Suffered Earlier";
                        break;

                      case 'BG':
                        $column = "Blood Group";
                        break;

                      case 'A_Doctor':
                        $column = "Docter Appointed";
                        break;

                      case 'stayed_days':
                        $column = "Number Of Days Patient Stayed";
                        break;

                      case 'WCPday':
                        $column = "Ward Charges Per Day";
                        break;

                      case 'admission':
                        $column = "Admission Required?";
                        break;

                      case 'totalWC':
                        $column = "Total Ward Charges";
                        break;
                      case 'service_fee':
                        $column = "Service Fee";
                        break;
                      case 'total_bill':
                        $column = "Total Bill";
                        break;
                      default:
                        # code...
                        break;
                    }

                    switch ($value) {
                      case 'M':
                        $value = "Male";
                        break;

                      case 'F':
                        $value = "Female";
                        break;
                      case 'O':
                        $value = "Other";
                        break;
                      case 'Y':
                        $value = "YES";
                        break;
                      case 'N':
                        $value = "NO";
                        break;

                      default:
                        # code...
                        break;
                    }

                    // Display the column name and value in a table row
                    echo '  
                          <tr style="height: 49px;"><td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-9">' . $column . '</td>
                          <td class="u-border-1 u-border-grey-30 u-table-cell">' . $value . '</td>  </tr>';
                  }
                  // Close the HTML table
                  echo '</tbody>
                    </table>';
                } else {
                  echo "Patient not found";
                }
              }

              ?>








            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>