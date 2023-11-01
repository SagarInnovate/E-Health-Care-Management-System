<?php
require "conn.php";

?>



<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS for table styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }
    
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .logo {
      width: 150px;
      height: auto;
    }
    
    .invoice-details {
      margin-bottom: 20px;
    }
    
    .invoice-details td {
      padding: 5px 10px;
      border-bottom: 1px solid #ddd;
    }
    
    .invoice-details td:first-child {
      width: 150px;
      font-weight: bold;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    .total-row {
      font-weight: bold;
    }
    
    .invoice-total {
      margin-top: 20px;
      text-align: right;
    }
    
    .amount-due {
      font-size: 18px;
      margin-top: 10px;
    }
    
    @media print {
      body {
        background-color: #fff;
        margin: 0;
        padding: 0;
      }
      
      .container {
        box-shadow: none;
        border: none;
        max-width: none;
        margin: 0;
        padding: 0;
      }
      
      .invoice-details td,
      th,
      td {
        border: none;
      }
      
      .amount-due {
        margin-top: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img class="logo" src="path_to_your_logo.png" alt="Hospital Logo">
      <h2>E-Health Care</h2>
    </div>
    
    <div class="invoice-details">
<?php
if(isset($_GET['id'])){
  $patientID=$_GET['id'];
  
  
  // Query to fetch patient data
  $sql = "SELECT * FROM patients WHERE id = $patientID";
  
  // Execute the query
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
 // Fetch the patient data
 $patient = mysqli_fetch_assoc($result);
include "layouts/tablebill.php";
 mysqli_free_result($result);

  }
 else {
  echo "Error retrieving patient data: " . mysqli_error($conn);
}
}

    ?>
    



   
  </div>
</body>
</html>
