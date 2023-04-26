<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
      body{
        background-image:url('R.png');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:50% 80%;
        background-position:center;
        background-color:#d1e3ea;
      }
    </style>

  </head>

  <body>
    <!--
    <div class="container" id="logoutbutton">
    <a href="logout.php" class="btn btn-primary mb-5">Logout</a>
    </div>
    -->

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            SPMS 4.0
            
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
            <ul>
            <li><a href="employee_dashboard.php" target="_self">Dashboard</a></li>
            <li><a href="manual_form.php" target="_self">Manual Form</a></li>
          <li><a href="import_CO.php" target="_self">Import CO</a></li>
          <li><a href="import_performance.php" target="_self">Student performance</a></li>
          <li><a href="import_studentEnrollment.php" target="_self">Student Enrollment</a></li>
          <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
      </div>

  </body>

</html>