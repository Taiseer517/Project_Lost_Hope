<?php

$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    include 'connect.php';
    
    $userType=$_POST['userType'];
    $ID=$_POST['ID'];
    $password=$_POST['password'];

  if($userType!='student'){
    $sql="SELECT * from employee_t where employeeID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:employee_dashboard.php');
        }
     }
  }    

  elseif($userType=='student'){
    $sql="SELECT * from student_t where studentID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:student_dashboard.php');
        }
     }
  }    

        else{
            $invalid=1;
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
    <link rel="stylesheet" href="style.css">

    <title>Login page</title>

    <style>
      body{
        background-image:url('R.png');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:20% 30%;
        background-position:top;
        background-color:#3305A3;
      }

      .mainContainer{
        
        margin-top:17%;
        width:30%;
      }

      .ID{
        font-family: Times, Times New Roman, Serif;
        font-size:20px;
        color:black;
        margin-bottom:18px;
        border-radius:12px;
        border:none;
      }

      .ID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
   }

   .ID:active{
    opacity: 0.5;
   }

      label{
        
        font-family: Times, Times New Roman, Serif;
        font-size:30px;
        color:white;
        font-weight:bolder;
        
      }

  .submitButton{
     height: 46px;
     width: 125px;
     display:inline-block;
     border-radius: 10px;
     border: none;
     outline: none;
     background: #6698FF;
     color: #fff;
     font-size: 18px;
     letter-spacing:1px;
     text-transform: uppercase;
     cursor:pointer;
     font-weight: bold;
     margin-right:60%;
     font-family: Times, Times New Roman, Serif;
     margin-top:15px;

    }

    .submitButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
   }

   .submitButton:active{
    opacity: 0.5;
   }

   .selectNew{
    height: 46px;
     width: 200px;
     display:inline-block;
     border-radius: 10px;
     border: none;
     outline: none;
     background: #6698FF;
     color: #fff;
     font-size: 22px;
     letter-spacing:2px;
     text-transform: uppercase;
     cursor:pointer;
     font-weight: bold;
     margin-left:5%;
     font-family: Arial, Times New Roman, Sans-serif;
     margin-top:15px;

   }

    </style>


  </head>
  <body>

 <?php
 if($invalid==1){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong></strong> Invalid credentials!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>

  <div style="display:flex;justify-content:center;">
  <div class="mainContainer">
   <form action="login.php" method="post">
  <div>
    <label style="">
      User Type
    </label>
    <select name="userType" class="select selectNew">
             <option disabled selected>User Type</option>
             <option value="student">Student</option>
             <option value="faculty">Faculty</option>
             <option value="department head">Department Head</option>
             <option value="dean">Dean</option>
         </select>
         </div>
    <br>

    <label style="margin-right:60%;">
      ID  
    </label>
    <input class="ID" style="margin-right:60%;" type="text" name="ID" placeholder="Enter Your ID">
    <br>
    <label>
      Password  
    </label>
    <input class="ID" style="margin-right:60%;" type="password" name="password" placeholder="Enter Your Password"><br>
    <input style="margin-right:60%;" type="submit" name="submit" value="Login" class="submitButton">
    </form>
  </div>
  </div>


</body>
</html> 