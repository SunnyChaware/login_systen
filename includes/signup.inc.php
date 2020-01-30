<?php

if(isset($_POST['signup-submit'])){ //checking if the user got here by clicking submit button only

  //linking the database to fill the info
  include 'dbh.inc.php';

  //creatinf the variables
  $username = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['cnfpwd'];

  //checking if the field is filled or //
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../sighnup.php?error=emptyfield&uid".$username."&mail".$email);
    exit();
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../sighnup.php?error=invalidmailuid");
    exit();
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location: ../sighnup.php?error=invalidmail&uid".$username);
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../sighnup.php?error=invaliduid&mail".$email);
    exit();
  }
  elseif($password!=$passwordRepeat){
    header("Location: ../sighnup.php?error=passwordcheck&uid".$username."&mail".$email);
    exit();
  }
  else{
    //we are using prepared statements here so no one can access the database trough scripts
    $sql="SELECT username FROM users WHERE username=?";
    $stmt= mysqli_stmt_init($conn); //this is prepeared statement
    //here we are checking for error i.e. if we got a error then give a error message
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../sighnup.php?error=sqlerror");
      exit();
    }

     else{
      //bind the aram to user to the statement e taken
      mysqli_stmt_bind_param($stmt,"s",$username);//1st statement and 2nd what datatype we want to pass4
      mysqli_stmt_execute($stmt);//run this info inside the database
      //for matching
      mysqli_stmt_store_result($stmt);//for fetching the data from the database
      //getting the rows that how many we have in this case maximum will be 1
      $resultCheck = mysqli_stmt_num_rows(stmt);
      if ($resultCheck>0) {
        header("Location: ../sighnup.php?error=usertaken&mail".$email);
        exit();
      }

      else{
        $sql= "INSERT INTO users (username,emailUsers,pwdUsers)
                VALUES (?,?,?)";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../sighnup.php?error=sqlerror");
          exit();
        }

        else{
          //hahing the password
          $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
          //binding the information with the hashed password and all the details
          mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
          mysqli_stmt_execute($stmt);
          //here we are not fetching the data but only putting then we dont have to use the last store result stmt
          header("Location: ../sighnup.php?signup=success");
          exit();
        }
      }
    }
  }
  //we need to close the sql and the database in order to protect the resources

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else{
  header("Location: ../sighnup.php");
  exit();
}
