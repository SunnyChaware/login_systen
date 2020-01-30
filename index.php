<?php
  require 'header.php';
 ?>
 <main>
   <div class="container">
     <div class="row">
       <div class="col-12">
         <?php
              if (isset($_SESSION['userId'])) {
                echo ' <p>You are logged in!</p>';
              }
              else{
                echo' <p>You are logged out!</p>';
              }
          ?>


       </div>
     </div>
   </div>
 </main>
<?php
  require 'footer.php';
 ?>
