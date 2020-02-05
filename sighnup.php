<?php
  require 'header.php';
 ?>

<section>
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
              <div class="" style="padding-top:55%;  padding-right:10%;">
                <form action="includes/signup.inc.php" method="POST">

                  <div class="form-group">
                    <label for="inputEmail4">Email&nbsp;<span style="color:red;">*</span></label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="" required>
                  </div>
                <div class="form-group">
                  <label for="Username/Email">Username/Email&nbsp;<span style="color:red;">*</span></label>
                  <input type="text" class="form-control" name="name" id="inputAddress" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="password">Password&nbsp;<span style="color:red;">*</span></label>
                  <input type="password" class="form-control" name="pwd" id="" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="Name">Confirm Password&nbsp;<span style="color:red;">*</span></label>
                  <input type="password" class="form-control" name="cnfpwd" id="" placeholder="" required>
                </div>
                <button type="submit" class="btn btn-primary" name="signup-submit">Signup</button>
            </form>
          </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">

            <p class="display-2 text-center" style="padding-top:80%;  padding-right:10%;">
              Sign-Up
            </p>

              </div>
            </div>
          </div>
            <div class="container">
              <div class="rows">
                <div style="padding-top:10%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                  <p style="padding-left:40%;color:darkgrey;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copyright <a href="#">@&nbsp;2020<br /></a>
                    <span style="padding-left:-60%">Made by Sunny Chaware</span></p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
</section>

<?php
  require 'footer.php';
 ?>
