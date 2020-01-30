<?php
if(isset($_POST['login-submit'])){
  require 'dbh.inc.php';

  $mailuid = $_POST['mail'];
  $pwd = $_POST['password'];

  if(empty($mailuid) || empty($pwd)){
    header("Location: ../index.php?erroremptyfields");
    exit();
  }else{
    $sql = "SELECT * FROM users where username=? or emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
      mysqli_stmt_execute($stmt);
      $results = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($results)) {
        $pwdCheck = password_verify($pwd,$row['pwdUsers']);

        if($pwdCheck == false){
          header("Location: ../index.php?error=wrongpassword");
          exit();
        }
        elseif($pwdCheck == true){
          session_start();
          $_SESSION['idusers'] = $row['idUsers'];
          $_SESSION['uidusers'] = $row['username'];

          header("Location: ../index.php?login=success");
          exit();
        }
      }else{
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
else{
  header("Location: ../login.php");
  exit();
}
