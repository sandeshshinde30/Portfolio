<?php 

$conn = mysqli_connect("localhost","root","","test");
  if(!$conn)
  {
    die("Connection not establish".mysqli_connect_error());
  }
  else{
    echo"Successful <br><br>";
  }

  if(isset($_POST['submit']))
  {
     if(isset($_FILES['uploadFile']))
     {
       echo"upload success";

       $file_name = time() . '_' . $_FILES['uploadFile']['name'];
       $file_tmp = $_FILES['uploadFile']['tmp_name'];
       $file_type = $_FILES['uploadFile']['type'];
       $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

       $extension = array("jpeg","jpg","png","gif");

       if(in_array($file_ext, $extension) == false)
       {
        echo "Invalid Extension";
       }
       
    //   if($file_size > 1000000)
    //   {
    //     echo "<br><brs>not valid size";
    //   }

     }

     else{
        echo "upload not success";
     }

     move_uploaded_file($file_tmp, "/uploads" . $file_name);

     $name = $_POST['name'];

     $sql = "INSERT INTO test_tbl(Name,Image) VALUES ('".$name."','".$file_name."')";

     $result = mysqli_query($conn,$sql);

     if($result)
     {
        echo "Success";
     }
     else{
        echo "Error";
     }
  }

  mysqli_close($conn);

?>