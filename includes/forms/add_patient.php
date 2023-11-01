<?php
require "././conn.php";

$sqlget = "SELECT id FROM patients ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sqlget);

// Check if the query was successful
if ($result) {
  // Fetch the last record
  $row = mysqli_fetch_assoc($result);

  // Store the record details in variables
  $patientId =(int) $row['id'];
  $patientId=$patientId+1;

}


if(isset($_POST["add"])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $age=$_POST['age'];
  $addrs=$_POST['address'];
  $MDSE=$_POST['message'];
  $gender=$_POST['gender'];
  $BG=$_POST['bg'];
  $status="active";


  // Get the current date and time
$date = date('Y-m-d'); // Example format: 2023-06-02
$time = date('H:i:s'); // Example format: 14:30:00

// Prepare and execute the SQL query
$sql = "INSERT INTO patients (date, time,name, address, phone, age, MDSE, gender, BG,status)
        VALUES ('$date', '$time','$name', '$addrs', '$phone', '$age', '$MDSE', '$gender', '$BG','$status')";

if (mysqli_query($conn, $sql)) {
  echo '<script type="text/javascript">
  alert("patient Record Added Successfully....");
  window.location = "panel.php?action=dashboard";
</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>



<div class="u-container-style u-layout-cell u-size-45 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-9">
                <div class="u-align-center-lg u-align-center-md u-align-center-xl u-align-right-sm u-align-right-xs u-form u-form-1">
                  <form action="<?php echo $_SERVER["PHP_SELF"]."?action=add_patient";?>" class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 3px;" redirect="true" method="post">
                    <div class="u-form-group u-form-group-1">
                       <label for="text-8350" class="u-form-control u-label">Patient ID</label>
                     <input disabled type="number" placeholder="" id="text-8350" value="<?php  echo $patientId; ?>" name="id" class="u-input u-input-rectangle">
                     </div>
                    <div class="u-form-group u-form-name">
                      <label for="name-b832" class="u-form-control-hidden u-label"></label>
                      <input type="text"  placeholder="Enter  Name" id="name-b832" name="name" class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                      <label for="phone-8502" class="u-form-control-hidden u-label"></label>
                      <input type="tel"  pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter  phone (e.g. +14155552675)" id="phone-8502" name="phone" class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                      <label for="text-e4f9" class="u-form-control-hidden u-label"></label>
                      <input type="number" required placeholder="Enter  Age" id="text-e4f9" name="age" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-message u-form-group-5">
                      <label for="address-66dd" class="u-form-control-hidden u-label"></label>
                      <textarea placeholder="Enter address"  id="address-66dd" name="address" class="u-input u-input-rectangle" required="required"></textarea>
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="message-b832" class="u-form-control-hidden u-label"></label>
                      <textarea placeholder="Any Major Disease Suffered Earlier "  rows="4" cols="50" id="message-b832" name="message" class="u-input u-input-rectangle" required=""></textarea>
                    </div>
                    <!-- // <div class="u-form-group u-form-radiobutton u-form-group-7">
                    //   <label class="u-label"></label>
                    //   <div class="u-form-radio-button-wrapper">
                    //     <input type="radio" name="radiobutton" value="Male">
                    //     <label class="u-label" for="radiobutton">Male</label>
                    //     <br>
                    //     <input type="radio" name="radiobutton" value="Female">
                    //     <label class="u-label" for="radiobutton">Female</label>
                    //     <br>
                    //     <input type="radio" name="radiobutton" value="Other">
                    //     <label class="u-label" for="radiobutton">Other</label>
                    //     <br>
                    //   </div>
                    // </div> -->
                    <div class="u-form-group u-form-select u-form-group-8">
                      <label for="select-0131" class="u-label">Select Gender</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-0131" name="gender" class="u-input u-input-rectangle" required="required">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                          <option value="O">Other</option>
                   
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                      </div>
                    </div>
                    <div class="u-form-group u-form-select u-form-group-8">
                    <label for="select-0131" class="u-label">blood Group</label>
                    <div class="u-form-select-wrapper">
                      <select id="select-0131" name="bg" class="u-input u-input-rectangle" required="required">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                      </select>
                      <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                    </div>
                  </div>
                    <div class="u-align-center u-form-group u-form-submit">
                      <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-10 u-btn-1">Add<br>
                      </a>
                      <input type="submit" name="add" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success">Record Succesfully Added</div>
                    <div class="u-form-send-error u-form-send-message">Something Went Wrong......Unable To Add Records..</div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>