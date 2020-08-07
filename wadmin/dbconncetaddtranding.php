<?php
if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}
include 'inc/conn.php'; 

  $sql = "UPDATE blog SET tranding='1' WHERE id=$id";
  if ($conn->query($sql) === TRUE) 
  {    
     
      header("location: trandinglist.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

