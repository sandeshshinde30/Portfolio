<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPKP CHATBOT Student Login</title>
    <link rel="web icon" type="jpg" href="img/GPKP_LOGO.jpg">
    <link rel="stylesheet" href="../CSS/stud_login.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>
<body>

  
    <div class="box"> 
        <div class="form">

        <h2>Student Login </h2>
        <form method = "post" action="stud_login.php">
        <?php if(isset($_GET['error'])) {?> 
        <p class = "error"><?php echo $_GET['error']; ?></p> 
        <?php } ?>
        <div class="inputbox">
            <input type="text" name="name" required="required" >
            <span>Student Name </span>
            <i></i>
          </div>

        

          <div class="inputbox">
              <input type="password" name="pass" required="required" >
              <span>Student Password</span>
              <i></i>
            </div>

        
            <div class="links">
           
           
            </div><br><br>
            <div class="f">
              <input type="submit" name="submit" value="Sign-In">
           <a href="../HTML/Index.html"> <input type="button" value="Back" name="back" ></a>
            </div>
        
        </form> 
         
          
    </div>
  </div>
  
<?php
 
 $Invalid_login = 0 ;

  $conn = mysqli_connect("localhost","root","","student");
  if(!$conn)
  {
    die("Connection not establish".mysqli_connect_error());
  }
  else
  {
    if(isset($_POST['submit']))
    {
      $name = $_POST['name'];
      $password = $_POST['pass'];

        //Fetch database data
      $sql = "SELECT * FROM stud_tbl";
      $result = mysqli_query($conn,$sql);
     
      // Store database data in variable

     while($row = mysqli_fetch_assoc($result)){
      if($name == $row['FName'] && $password == $row['Password'])
      {
        $_SESSION['disp'] = $row['Roll_No'];
        header('Location: stud_login1.php');
        
      }
      else{
        $Invalid_login = 1;
      }
    }

    if($Invalid_login == 1)
      {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Invalid Login...")';  
        echo '</script>';
      }
    }
  }

  mysqli_close($conn);


?>
</body>
</html>