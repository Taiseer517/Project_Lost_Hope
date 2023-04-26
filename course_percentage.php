<?php
include 'connect.php';

$sql = "SELECT enrolledCourse, AVG(Grade) as avgGrade FROM course_outcome_t GROUP BY enrolledCourse";
$result = $con->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Couse Outcome Percentage</title>
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
        color: #0d287b;
        font-size: bold;
      }
      table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 10px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #6698FF;
  color: white;
}
    </style>
<body>
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
          <!--<li><a href="ploAnalysis.php" target="_self">PLO Analysis</a></li>
          <li><a href="ploAchieveStats.php" target="_self">PLO Achievement Stats</a></li> -->
          <li><a href="dataEntry.php" target="_self">Data Entry</a></li>
          <!--<li><a href="course_percentage.php" target="_self">Course Outcomes</a></li>
          <li><a href="viewCourseOutline.php" target="_self">View course Outline</a></li>
          <li><a href="enrollmentStatistics.php" target="_self">Enrollment Stats</a></li> -->
          <li><a href="performanceStats.php" target="_self">GPA Analysis</a></li>
          <li><a href="logout.php" target="_self">Logout</a></li>
            </ul>
        </div>
      </div>
      <b><h1>Course Outcome Percentage</h1></b>
    <table class = "course">
        <tr>
            <th>Course</th>
            <th>Average Grade</th>
            <th>Course Percentage</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["enrolledCourse"] . "</td>";
                echo "<td>" . round($row["avgGrade"], 2) . "</td>";
                echo "<td>" . round((($row["avgGrade"]/4) * 100), 2) . "%</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$con->close();
?>
