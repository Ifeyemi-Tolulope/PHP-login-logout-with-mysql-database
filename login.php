<?php 
// connect to database
include('includes/confirm_login.php');
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
        <h1>
          Login
        </h1>
        <p class="lead">use this form to login into your account</p>

        <?php echo $loginError; ?>

        <form class="form-inline" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" method="post">
          <div class="form-group">
            <label for="login-username" class="sr-only">Username</label>
            <input class="form-control" type="text" name="username" id="login-username">
            <small class="text-danger"><?php echo $usernameError;?></small>
          </div>
          
          <div class="form-group">
            <label for="login-password" class="sr-only">Password</label>
            <input class="form-control" type="password" name="password" id="login-password">
            <small class="text-danger"><?php echo $passwordError;?></small>
          </div>
          <button class="btn btn-default" type="submit" name="login">Login</button>
        </form>
     </div> 
    </div>
     
  <!--pagination  disabled  -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://code.jquery.com/jquery.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "js/bootstrap.min.js"></script>
      
   </body>
</html>