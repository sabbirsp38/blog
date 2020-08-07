<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>One tic tac toe</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
<!--NAVIGATION-->
<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container nav_content">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a href="index.php" class="navbar-brand"><img  src="images/logo.PNG" class="logoimg img-responsive"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="allcat.php">All Category</a></li>
                <li><a href="allcat.php">TRENDING</a></li>
                <li><a href="connect.php">Connect For advertisement</a></li>
                <li>
                  <div class="search-container">
                      <form method="get" action="scarch.php">
                        <input  type="text" placeholder="Search.." name="scrach">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                  </div>
               </li>
            </ul>
        </div>
    </div>
</div>
<div style="min-height: 100px;"></div>
  
<!--- End Navigation ---->