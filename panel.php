<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/Home.css" media="screen">
  <?php
  session_start();
  if (!isset($_SESSION["username"])) {
      header("Location: index.php");
  }
  include "layouts/header.php";
  include "includes/main_dash.php";

  ?>

