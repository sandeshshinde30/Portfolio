<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPKP CHATBOT Admin Login</title>
    <link rel="web icon" type="jpg" href="img/GPKP_LOGO.jpg">
    <link rel="stylesheet" href="../CSS/AdminNew.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>
<body>

  
    <div class="box"> 
        <div class="form">

        <h2>GPKP CHATBOT Admin </h2>
        <form method = "post" action="admin.php">
        <?php if(isset($_GET['error'])) {?> 
        <p class = "error"><?php echo $_GET['error']; ?></p> 
        <?php } ?>
        <div class="inputbox">
            <input type="text" name="name" required="required" >
            <span>Admin Name </span>
            <i></i>
          </div>

        

          <div class="inputbox">
              <input type="password" name="pass" required="required" >
              <span>Admin Password</span>
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

  $conn = mysqli_connect("localhost","root","","gpkpbot2");
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

      // Fetch database data
$sql = "SELECT * FROM adminlogin";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if ($result) {
    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Store database data in variable
        while ($row = mysqli_fetch_assoc($result)) {
            if ($name == $row['AdminName'] && $password == $row['Pass']) {
                $adminName = $row['Name'];
                $_SESSION['Admin_Name'] = $adminName;
                header('Location: admin1.php');
                exit; // Exit to prevent further execution
            } else {
                $Invalid_login = 1;
            }
        }
    } else {
        // No rows returned, handle this case
        $Invalid_login = 1;
    }
} else {
    // Error in SQL query, handle this case
    $Invalid_login = 1;
}

if ($Invalid_login == 1) {
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