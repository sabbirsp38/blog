 <?php $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "blog_project";;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  }