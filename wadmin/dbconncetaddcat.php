<?php
include 'inc/conn.php'; 



     
    $from_data1 = addslashes ($_POST['name']);





  $sql = "INSERT INTO  cat (name) VALUES ('$from_data1')";
  if ($conn->query($sql) === TRUE) 
  {    
     
      header("location: catlist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

