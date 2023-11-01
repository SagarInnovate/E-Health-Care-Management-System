<?php
date_default_timezone_set("Asia/Kolkata");
$conn=mysqli_connect("localhost","root","","health_care");

// Query to get the total number of patients
$sqlTotal = "SELECT COUNT(*) AS total_patients FROM patients";
$resultTotal = mysqli_query($conn, $sqlTotal);
$rowTotal = mysqli_fetch_assoc($resultTotal);
$totalPatients = $rowTotal['total_patients'];

// Query to get the number of discharged patients
$sqlDischarged = "SELECT COUNT(*) AS discharged_patients FROM patients WHERE status = 'Discharged'";
$resultDischarged = mysqli_query($conn, $sqlDischarged);
$rowDischarged = mysqli_fetch_assoc($resultDischarged);
$dischargedPatients = $rowDischarged['discharged_patients'];

// Query to get the number of active patients
$sqlActive = "SELECT COUNT(*) AS active_patients FROM patients WHERE status = 'Active'";
$resultActive = mysqli_query($conn, $sqlActive);
$rowActive = mysqli_fetch_assoc($resultActive);
$activePatients = $rowActive['active_patients'];

$recoveryRatio = ($dischargedPatients / $totalPatients) * 100;

// Update the data in the dashboard table
$sqlUpdate = "UPDATE dashboard SET total_patient = $totalPatients, active_patient = $activePatients, discharged = $dischargedPatients, total_recovered = $recoveryRatio";
mysqli_query($conn, $sqlUpdate);
