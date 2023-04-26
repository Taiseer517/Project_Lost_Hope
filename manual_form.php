<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST['studentID'];
    $edu_year = $_POST['edu_year'];
    $edu_sem = $_POST['edu_sem'];
    $enrolledCourse = $_POST['enrolledCourse'];
    $enrolledSection = $_POST['enrolledSection'];
    $Grade = $_POST['Grade'];

    $sql = "INSERT INTO course_outcome_t (studentID, edu_year, edu_sem, enrolledCourse, enrolledSection, Grade)
    VALUES ('$studentID', '$edu_year', '$edu_sem', '$enrolledCourse', '$enrolledSection', '$Grade')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
$con->close();
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
        justify-content: center;
        display: flex;
        color:  #0d287b;
      }
      form{
        font-weight: bold;
        color: black;
        margin-left: 600px;
      }
      form input {
  width: 80%;
  height: 15px;
    margin: 35px;
  background: #fff;
  justify-content: center;
  display: flex;
  margin: 5px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
  }
      input[type="text"] {
    width: 30%;
    margin-left: 0px;
    justify-content: center;
    border: none;
    height: 40px;
    color: black;
    background: ;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
  }
  input[type="submit"] {
    width: 20%;
    margin-left: 40px;
    border: none;
    height: 40px;
    color: #fff;
    background: #0d287b;
    font-size: 16px;
    font-weight: bold;
    border-radius: 15px;
  }
  input[type="submit"]:hover{
    cursor: pointer;
    background:   #1336a1;
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
      <h1>Student Enrollment Form</h1><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Student ID: <input type="text" name="studentID"><br>
  Educational year: <input type="text" name="edu_year"><br>
  Educational semester: <input type="text" name="edu_sem"><br>
  Enrolled course: <input type="text" name="enrolledCourse"><br>
  Enrolled section: <input type="text" name="enrolledSection"><br>
  Obtained grade: <input type="text" name="Grade"><br>
  <input type="submit">
</form>
</body>

</html>