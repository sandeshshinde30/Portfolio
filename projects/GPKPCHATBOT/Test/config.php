<?php 

$conn = mysqli_connect("localhost","root","","gpkpbot2");
  if(!$conn)
  {
    die("Connection not establish".mysqli_connect_error());
  }
  else{
    echo"Successful";
  }

?>