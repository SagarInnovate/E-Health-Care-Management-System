<?php
require "././conn.php";
date_default_timezone_set("Asia/Kolkata");
$patientID="";
$nodps = "";
$wcpd = "";
$twc = "";
$df = "";
$sc = "";
$ta = "";
$df = "";
$sc = "";
$ta = "";
$url_bill='#';
$url="";


// echo "URL: " . $url;

if(isset($_GET["id"])){
  $patientID=$_GET["id"];
  $sql = "SELECT * FROM patients WHERE id = $patientID";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $patientData = "Patient ID: " . $row['id'] . "\n"
  . "Name: " . $row['name'] . "\n"
  . "Address: " . $row['address'] . "\n"
  . "Phone: " . $row['phone'] . "\n"
  . "Age: " . $row['age'] . "\n"
  . "MDSE: " . $row['MDSE'] . "\n"
  . "Gender: " . $row['gender'] . "\n"
  . "Blood Group: " . $row['BG'];

 
} else {
  $patientData = 'patient not found';
}
}


if(isset($_GET["twc"])){
  $nodps = (int) $_GET["nodps"];
$wcpd =(int) $_GET["wcpd"];
$twc =(int) $_GET["twc"];
}

if(isset($_GET["ta"])){
  $df = (int) $_GET["df"];
$sc =(int) $_GET["sc"];
$ta =(int) $_GET["ta"];

$url_bill="print_bill.php?id=".$patientID;
}

if(isset($_GET["save"])){
  $url_bill="print_bill.php?id=".$patientID;
  $id = $_GET['id'];
  $nodps = $_GET['nodps']; // Number of days patient stayed
  $wcpd = $_GET['wcpd']; // Ward charges per day
  $twc = $nodps * $wcpd; // Total ward charges
  $df = $_GET['df']; // Doctor fee
  $sc = $_GET['sc']; // Service fee
  $ta = $twc + $df + $sc; 
  $status = $_GET["status"]; // Total bill
  $date = date('Y-m-d');
  $sql = "UPDATE patients SET
          stayed_days = $nodps,
          WCPday = $wcpd,
          totalWC = $twc,
          doctor_fee = $df,
          status = '$status',
          discharged_date='$date', 
          service_fee = $sc,
          total_bill = $ta
          WHERE id = $id";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
    // Successful update
  } else {
    echo "Error updating patient data: " . mysqli_error($conn);
  }
}



?>




<div class="u-container-style u-layout-cell u-size-45 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-9">
                <div class="u-align-center-lg u-align-center-md u-align-center-xl u-align-right-sm u-align-right-xs u-form u-form-1">
                  <form action="" class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 3px;" redirect="true" method="get">
                    <div class="u-form-group u-form-group-1">
                      <label for="text-8350" class="u-form-control-hidden u-label"></label>
                      <input type="number" onblur="losingfocusBill()"placeholder="Enter Patient ID" id="text-8350" name="id" value="<?php echo $patientID; ?>" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="message-b832" class="u-label">Patient Info</label>
                      <textarea disabled placeholder="Patient Info Will Show Here" rows="10" cols="50" id="message-b832" name="message" class="u-input u-input-rectangle" required=""><?php echo $patientData; ?></textarea>
                    </div>
                   
                    <div class="u-form-group u-form-select u-form-group-8">
                    <label for="select-0131" class="u-label">Status</label>
                    <div class="u-form-select-wrapper">
                      <select id="select-0131" name="status" class="u-input u-input-rectangle" required="required">
                        <option value="discharged">discharged</option>
                        <option value="active">active</option>
                      
                      </select>
                      <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                    </div>
                  </div>

                    <div class="u-form-group u-form-name u-form-partition-factor-2">
                      <label for="name-b832" class="u-form-control-hidden u-label"></label>
                      <input type="number" value="<?php echo $nodps ?>" placeholder="No. Of Days Patient Stayed....." id="name-b832" name="nodps" class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                      <label for="text-e4f9" class="u-form-control-hidden u-label"></label>
                      <input type="number"  value="<?php echo $wcpd ?>" placeholder="Ward Charges/Day" n onkeypress="enterKeyPressedwcps(event)" onblur="losingfocuswcpd()" id="text-e4f9" name="wcpd" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
                      <label for="text-3b6e" class="u-form-control-hidden u-label"></label>
                      <input disabled type="number" value="<?php echo $twc ?>" placeholder="Total Ward Charges Will Shows here.." id="text-3b6e" name="twc" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-6">
                      <label for="text-71d3" class="u-form-control-hidden u-label"></label>
                      <input type="number" value="<?php echo $df ?>" placeholder="Docters Fee" id="text-71d3" name="df" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-group-7">
                      <label for="text-6ff0" class="u-form-control-hidden u-label"></label>
                      <input type="number" onblur="losingfocussc()" value="<?php echo $sc ?>" placeholder="Service Charges" id="text-6ff0" name="sc" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-group-8">
                      <label for="text-03c9" class="u-label">Total Amount</label>
                      <input type="number" disabled value="<?php echo $ta ?>" placeholder="0/-" id="text-03c9" name="ta" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                      <a href="" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Save Bill<br>
                      </a>
                      <input onclick="bills()" type="submit" name="save" value="submit" class="u-form-control-hidden">
                    </div>
                    <input type="hidden" value="bill" name="action">
                    <div class="u-align-center u-form-group">
                      <a href="<?php echo $url_bill; ?>" class="u-border-none u-btn u-button-style u-custom-color-1 u-btn-1">Generate And Print Bill<br>
                      </a>
                      <div>
                     
                    <div class="u-form-send-message u-form-send-success">remove me and my blcok.......am im nofification sender</div>
                    <div class="u-form-send-error u-form-send-message">remove me and my blcok.......am im nofification sender</div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>