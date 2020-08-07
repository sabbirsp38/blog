<?php
include 'inc/conn.php'; 



     
    $from_data1 = addslashes ($_POST['name']);
    $from_data2 = addslashes ($_POST['body']);





  $sql = "INSERT INTO  pages (name,body) VALUES ('$from_data1','$from_data2')";
  if ($conn->query($sql) === TRUE) 
  {    
     
      header("location: pagelist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

