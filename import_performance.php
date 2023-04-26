<?php 

include 'connect.php';

if(isset($_POST["import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES['file']["size"] > 0){
        $file =  fopen($fileName, "r");

        while(($column = fgetcsv($file, 10000, ",")) !== FALSE){
            // Check if the row contains valid data
            if(count($column) == 3 && !empty($column[0]) && !empty($column[1]) && !empty($column[2])){
                $sqlInsert = "Insert into student_course_performance_t (studentID, totalMarksObtained, gradePoint) values ('" . $column[0] . "', '" . $column[1] . "', '" . $column[2] . "')";

                $result = mysqli_query($con, $sqlInsert);

                if(!empty($result)){
                    echo "CSV imported into database";
                }
                else{
                    echo "Problem importing CSV";
                }
            }
        }
    }
}

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
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:50% 80%;
        background-position:center;
        background-color:#d1e3ea;
      }
      h1{
        margin-top: 20px;
        justify-content: left;
        display: flex;
        margin-left: 450px;
      }
      .form-horizontal{
        width: 90%;
	height: 100px;
	justify-content: center;
    margin-left: 100px;
	display: flex;
    font-size: 25px;
	margin: 60px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 10px;
      }
    button[type="submit"] {
    width: 40%;
    margin-left: 120px;
    border: none;
    height: 40px;
    color: #fff;
    background: #0d287b;
    font-size: 16px;
    font-weight: bold;
    border-radius: 15px;
  }
  button[type="submit"]:hover{
    cursor: pointer;
    background:   #6698FF;
    color: #fff;
    font-weight: bold;
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
      <b><h1>Import Students performance</h1></b>
      <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">


<div>
<label><b> Choose CSV File:</b></label>
<input type = "file" name="file" accept=".csv"><br><br>
<button type="submit" name="import"><b>Import</b></button>
</div> 
  </body>

</html>	
