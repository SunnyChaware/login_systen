<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login System</title>
  </head>

  <header>
      <!-- <a href="#">
        <img src="" alt="logo">
      </a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About Me</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
        <form class="" action="includes/login.inc.php" method="post">
          <input type="text/email" name="mailuid" value="" placeholder="UserId/Email">
          <input type="password" name="password" value="" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
        <form class="" action="includes/logout.inc.html" method="post">
          <button type="submit" name="logout-submit">Logout</button>
          </form> -->

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">About Me</a>
                <a class="nav-item nav-link" href="#" tabindex="1" >Contact</a>
              </div>
            </div>
            <form class="form-inline" method="post" action="includes/login.inc.php">
                <label class="sr-only" for="inlineFormInputName2">Name</label>
                <input type="text" name="mail" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="UserId/Email">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
                </div>
                <!-- submit button -->
                <button type="submit" class="btn btn-primary mb-2" name="login-submit">Submit</button>
                <a class="nav-item nav-link" style="color:black" href="sighnup.php">Signup</a>
            </form>
            <form class="" action="includes/logout.inc.html" method="post">
              <button type="submit" class="btn btn-primary mb-2" name="logout-submit">Logout</button>
            </form>
          </nav>
  </header>
