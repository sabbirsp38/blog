<?php

if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
  header("Location: 404.php") ;
   $id= $_GET['$id'];
}else{
   $id= $_GET['$id'];
}

  ?>