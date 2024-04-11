<html>
    <head>
        <title>
            Delete Student 
        </title>
        <link rel="stylesheet" href="../CSS/stud_update.css">
    </head>
    <body>
    <div class="inputbox">
        <form action="stud_delete.php" method="post">
            <input type="text" required="required" name="rollno" >
            <span>Enter Roll Number</span>
            <i></i>
          </div>
          <div class="f">
             <input type="submit" name="submit" value="Submit">
             <a href="student1.php"><input type="button" name="back" value="Back"></a>
        </form>   
        
        <?php 

$flag = 0;

 if(!empty($_POST['rollno']))
 {
    $rollNo = $_POST['rollno'];
    
    if(!preg_match_all('/^[0-9]{6}$/',$rollNo))
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please enter valid 6 digit number...")';  
        echo '</script>';
    }
    else
    {
        // header('Location: stud_update1.php');

        $conn = mysqli_connect("localhost","root","","student");
        if(!$conn)
        {
            die("Connection not establish".mysqli_connect_error());
        }
        else
        {
            $sql = "SELECT * FROM stud_tbl";
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result))
            {
                if($rollNo == $row['Roll_No'])
                {
                    $sql = "DELETE FROM stud_tbl WHERE Roll_No = '$rollNo' ";

                    mysqli_query($conn, $sql); 
                    $flag = 0;
                }
                else
                {
                    $flag = 1;
                }
            }

            if($flag == 0)
            {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Student Record Deleted...")';  
                echo '</script>';
            }

            if($flag == 1)
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Student Record not present...")';  
                    echo '</script>';
                }
        }
    }
 }

?>
       
    </body>
</html>