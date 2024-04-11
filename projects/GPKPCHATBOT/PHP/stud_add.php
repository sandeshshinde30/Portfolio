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

    <link rel="stylesheet" href="../CSS/stud_add.css">

    <title>Add Student</title>
</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action = "stud_add.php" method = "post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="firstName" class="form-control form-control-lg" required/>
                    <label class="form-label" for="firstName" >First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="lastName" class="form-control form-control-lg" required />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                <div class="form-outline">
                    <input type="text" name="rollno" class="form-control form-control-lg" required />
                    <label class="form-label" for="rollno">Roll No.</label>
                  </div>

                 

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male"  checked  />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="Female"  />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" name="emailAddress" class="form-control form-control-lg" required />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" name = "birth" id="birthdayDate" required />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                    <label class="form-label" for="password">Password</label>
                  </div>
                  </div>

                  <div class="form-outline">
                    <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg" required />
                    <label class="form-label" for="cpassword">Confirm Password</label>
                  </div>  

                
              </div>

              <div class="row">
                <div class="col-12">
                  
                  <select class="select form-control-lg" name="branch">
                    <option value="IT">IT</option>
                    <option value="ME">ME</option>
                    <option value="EE">EE</option>
                    <option value="CE">CE</option>
                    <option value="E&TC">E&TC</option>
                    <option value="Meta">Meta</option>
                    <option value="Sugar">Sugar</option>
                  </select>
                  <label class="form-label select-label">Choose Branch</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" name = "submit" onclick="validate()"/>
                <input class="btn btn-primary btn-lg" type="reset" value="Reset" />
                <a href="student1.php"> <input class="btn btn-primary btn-lg" type="button" value="Back"/> </a>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php
error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect("localhost","root","","student");


if(!$conn)
  {
    die("Connection not establish".mysqli_connect_error());
  }
  else
  { 

    if(empty($_POST['firstName']) && empty($_POST['lastName']) && empty( $_POST['rollno']) && empty($_POST['gender']) && empty($_POST['emailAddress'])
     &&  empty($_POST['birth']) && empty($_POST['password']) && empty($_POST['cpassword']) && empty( $_POST['branch']))
     {
        echo"";
     }
     
     
     else
    {

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $rollno = $_POST['rollno'];
    $gender = $_POST['gender'];
    $email = $_POST['emailAddress'];
    $dob = $_POST['birth'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $branch = $_POST['branch'];
    
    if(!preg_match_all('/^[0-9]{6}$/', $rollno))
    {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Roll Number must be 6 number digit...")';  
      echo '</script>';
    }
    else{

    
    if($password == $cpassword) 
    {
      $sql = "INSERT INTO stud_tbl VALUES('NULL','$fname','$lname','$rollno','$gender','$email','$dob','$password','$cpassword','$branch')";

      $res = mysqli_query($conn,$sql);
  
      if($res)
      {
          echo"inserted...";
      }
      else
      {
        echo"failed";
      }
  
    }
    else
    {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Password must be same....")';  
      echo '</script>';
    }
  }
    mysqli_close($conn);
  }
}

?>

</body>
</html>