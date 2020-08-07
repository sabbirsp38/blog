<?php
include 'inc/conn.php'; 



     
    $from_data2 = addslashes ($_POST['body']);





  $sql = "INSERT INTO  advatisment (body) VALUES ('$from_data2')";
  if ($conn->query($sql) === TRUE) 
  {    
     
      header("location: Advertisementlist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

