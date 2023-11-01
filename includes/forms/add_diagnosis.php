<?php 
require "././conn.php";
$userID="";
if(isset($_GET["id"])){
  $userID=$_GET["id"];
  $sql = "SELECT * FROM patients WHERE id = $userID";
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

if(isset($_POST["diago"])){


// PHP variables holding the updated data'
$id=$_POST["id"];
$A_doctor = $_POST["doctor"];//;
$symptoms = $_POST["symp"];//"Fever, headache";
$diagnosis = $_POST["diagnosis"];//"Common cold";
$medicines = $_POST["medicine"];//"Acetaminophen, rest";
$admission = $_POST["admission"];//"Yes";

// SQL query to update the data in the patients table
$sql = "UPDATE patients SET A_Doctor = '$A_doctor', symptoms = '$symptoms', diagnosis = '$diagnosis', medicines = '$medicines', admission = '$admission' WHERE patients.id = '$id'";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "<script>
  alert('Diagnosis info Added Successfully....');
  window.location = 'panel.php?action=dashboard';
</script>";
} else {
  echo "Error updating data: " . mysqli_error($conn);
}

}


?>

<div class="u-container-style u-layout-cell u-size-45 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-9">
                <div class="u-align-center-lg u-align-center-md u-align-center-xl u-align-right-sm u-align-right-xs u-form u-form-1">
                  <form action="<?php echo $_SERVER["PHP_SELF"]."?action=add_diagonosis";?>" class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 3px;" redirect="true" method="post">
                    <div class="u-form-group u-form-group-1">
                      <label for="text-fbf9" class="u-form-control-hidden u-label"></label>
                      <input type="number" required onblur="losingfocus()" placeholder="Enter Patient ID....." id="text-fbf9" value="<?php echo $userID; ?>" name="id" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-textarea u-form-group-2">
                      <label for="textarea-e709" class="u-label">Patient Information</label>
                      <textarea rows="12"  cols="50" id="textarea-e709" name="textarea" class="u-input u-input-rectangle" required="" placeholder="Patient Info Will Show Here"><?php echo $patientData; ?></textarea>
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-3">
                      <label for="text-8350" class="u-form-control-hidden u-label"></label>
                      <input type="text" required placeholder="Docter Appointed" id="text-8350" name="doctor" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-name u-form-partition-factor-2">
                      <label for="name-b832" class="u-form-control-hidden u-label"></label>
                      <input type="text"  placeholder="Symptoms" id="name-b832" name="symp" class="u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
                      <label for="text-4877" class="u-form-control-hidden u-label"></label>
                      <input type="text" required placeholder="Diagnosis" id="text-4877" name="diagnosis" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-6">
                      <label for="text-e4f9" class="u-form-control-hidden u-label"></label>
                      <input type="text" required placeholder="Medicines" id="text-e4f9" name="medicine" class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-7">
                      <label for="select-0131" class="u-label">Addmission Required</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-0131" name="admission" class="u-input u-input-rectangle" required="required">
                          <option value="Y">Yes</option>
                          <option value="N">No</option>
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                      </div>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                      <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-9 u-btn-1">Add<br>
                      </a>
                      <input type="submit" name="diago" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success">successful..................</div>
                    <div class="u-form-send-error u-form-send-message">something went wrong</div>
                    
                  </form>
                </div>
              </div>
            </div>

  