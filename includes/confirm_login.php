<?php

$passwordError = $usernameError = $loginError = $formUser = "";
   if (isset($_POST['login'])){

        //build a funtion to validate data
        function validateFormData( $formData ){
        $formData = trim( stripslashes( htmlspecialchars($formData) ) );
           return $formData;
        }

        //create variable
        //wrap the data with our function
        if(empty($_POST['username'])){
          $usernameError = "Please input username";
        }else{
          $formUser = validateFormData($_POST['username']);
        }

        if(empty($_POST['password'])){
           $passwordError = "Please input password";
        }else{
          $formPass = validateFormData($_POST['password']);
        }
        

        // connect to database
        include('includes/connection.php');

        //create query
        $query="SELECT username, email, password FROM users WHERE username='$formUser' ";

        //store the result
        $result= mysqli_query($conn, $query);

        //verify if result is retuned
        if( mysqli_num_rows($result) > 0 ) {
          //store user data in variables
          while( $row = mysqli_fetch_assoc($result) ){
            $user       = $row['username'];
            $email      = $row['email'];
            $hashedPass = $row['password'];
          }

        //verify hashed password with the typed password
        if (password_verify( $formPass ,$hashedPass ) ) {
          //correct login details
          //start the session
          session_start();

          //store data in the session variables
          $_SESSION['loggedInUser'] = $user;
          $_SESSION['loggedInEmail'] = $email;

          header("Location:profile.php");

        }else{
          //error message
            $loginError = "<div class='alert alert-danger'>Wrong username / password. Please Try Again</div>";
        }

      }else{
        //if ther are no results
        $loginError = "<div class='alert alert-danger'>No Such User in the database. Please Try Again.<a class='close' data-dismiss='alert'>&times; </a></div>";
      }

      //close mysql connection
      mysqli_close($conn);

   }


 ?>  
