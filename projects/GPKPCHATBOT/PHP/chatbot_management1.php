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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Question & Answer</h3>
            <form action = "chatbot_management1.php" method = "post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="question" >Question : </label>
                    <input type="text" name="question" class="form-control form-control-lg" required/>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="answer">Answer : </label>
                    <input type="text" name="answer" class="form-control form-control-lg" required/>
                  </div>

                </div>

                <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Add" name = "submit" onclick="validate()"/>
                <input class="btn btn-primary btn-lg" type="reset" value="Reset" />
                <a href="admin1.php"> <input class="btn btn-primary btn-lg" type="button" value="Back"/> </a>
              </div>
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
$conn = mysqli_connect("localhost","root","","gpkpbot");


if(!$conn)
  {
    die("Connection not establish".mysqli_connect_error());
  }
  else
  { 
    if(empty($_POST['question']) && empty($_POST['answer']))
    {
        echo"";
     }
     
     else
    {

    $question = $_POST['question'];
    $answer = $_POST['answer'];
       
    $sql = "INSERT INTO chatbot VALUES(NULL,'$question','$answer')";

    $res = mysqli_query($conn,$sql);

    if($res)
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Question and Answer added Successfully")';  
        echo '</script>';
    }
    else
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Question and Answer not added")';  
        echo '</script>';
    }
  
    }
    
  }
    mysqli_close($conn);
  

?>


</body>
</html>