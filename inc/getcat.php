<?php

if (!isset($_GET['$cat']) || $_GET['$cat']==NULL  ) {
  header("Location: 404.php") ;
   $cat= $_GET['$cat'];
}else{
   $cat= $_GET['$cat'];
}

  ?>