<?php
$error="";
$msg="";

 use PHPMailer\PHPMailer\PHPMailer;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "blog_project";

  // $servername = "localhost";
  // $username = "mstejuej_dbuser";
  // $password = "K(7x#GC};k#9";
  // $dbname = "mstejuej_smtec";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  } 

     
    $from_data1 = $conn->real_escape_string ($_POST['username']);
    $from_data2 = $conn->real_escape_string ($_POST['useremail']);
    $from_data3 = $conn->real_escape_string ($_POST['unserphone']);
    $from_data4 = $conn->real_escape_string ($_POST['message_body']);


  $sql = "INSERT INTO tbl_message (name, email, phone,  message) VALUES ('$from_data1', '$from_data2', '$from_data3', '$from_data4')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location:index.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>
