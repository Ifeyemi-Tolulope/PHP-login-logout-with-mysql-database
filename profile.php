<?php
 session_start();
 ?>  

<!DOCTYPE html>
<html>
   
   <head>
      <title>Bootstrap index</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
      
      <!-- Bootstrap -->
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      
   </head>

   <body>
    <div class="">
      <div class="container">
        <h1>PROFILE</h1>
        <p class="lead"> Welcome <?php echo $_SESSION['loggedInUser'];?> </p>
        <p class="lead"> Your email address is: <?php echo $_SESSION['loggedInEmail'];?> </p>
        <p><a href="logout.php" class="btn btn-danger btn-sm">Log out</a></p>
     </div> 
    </div>
     
  <!--pagination  disabled  -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://code.jquery.com/jquery.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "js/bootstrap.min.js"></script>
      
   </body>
</html>