<?php

session_start();

$conn = mysqli_connect("localhost","root","","student");

$roll  = $_SESSION['disp'];
$fname = 'no' ; 
$lname = 'no';
$rollno = 'no';
$gender = 'no';
$email = 'no';
$dob = 'no';
$password = 'no';
$cpassword = 'no';
$branch = 'no';


    $sql = "SELECT * FROM stud_tbl WHERE Roll_No = '$roll' ";
    
    $result = mysqli_query($conn, $sql); 

    while($row = mysqli_fetch_assoc($result))
            {

                $fname = $row["FName"];
                $lname = $row["LName"];
                $rollno = $row["Roll_No"];
                $gender = $row["Gender"];
                $email = $row["EMail"];
                $dob = $row["DOB"];
                $password = $row["Password"];
                $cpassword = $row["CPassword"];
                $branch = $row["Branch"];

            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../CSS/stud_display1.css">

    <title>Display Student</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Student Data</h3>
            <form action = "stud_add.php" method = "post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="firstName" >First Name : </label>
                    <label class="form-label1" for="firstName" ><?php echo"$fname"; ?></label> 
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="lastName">Last Name : </label>
                    <label class="form-label1" for="lastName"><?php echo"$lname"; ?></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                <div class="form-outline">
                    <label class="form-label" for="rollno">Roll Number : </label>
                    <label class="form-label1" for="rollno"><?php echo"$rollno"; ?></label>
                  </div>

                 

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-check form-check-inline">
                    <label class="form-label" for="maleGender">Gender : </label> <br>
                    <label class="form-label1" for="maleGender"><?php echo"$gender"; ?></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email : </label>
                    <label class="form-label1" for="emailAddress"><?php echo"$email"; ?></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline datepicker w-100">
                    <label for="birthdayDate" class="form-label">Birth date : </label>
                    <label for="birthdayDate" class="form-label1"><?php echo"$dob"; ?></label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <label class="form-label" for="password">Password :</label>
                    <label class="form-label1" for="password"><?php echo"$password"; ?></label>
                  </div>
                  </div>

              </div>

              <div class="row">
                <div class="col-12">
                   <label class="form-label">Branch : </label>
                   <label class="form-label1"><?php echo"$branch"; ?></label>
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" name = "submit" onclick="validate()"/>
                <a href="student1.php"> <input class="btn btn-primary btn-lg" type="button" value="Back"/> </a>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>