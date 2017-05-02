<center><div>
    <h2 style="color: blueviolet;font-family: verdana;">
<?php

if(isset ($_SESSION['Login'])&& $_SESSION['Login']=="1")
        {
             echo '<h1>Logged in Successfully.</h1>';
             echo '<h2 >Welcome '.$_SESSION['Name'].' to our Demo project</h2>';
        } 
      else {
          echo '<h1>You are  logged out.<br>Please <a style="color:blue;font-size:20px;font-family:verdana" href="index.php?s='.  encode("login_true").'"> Login </a>to acess user profile.</h1>';
          echo '<span style="color:Black">OR</span>';
          echo '<h2>Go to main <a style="color:blue;font-size:20px;font-family:verdana" href="index.php"> Menu. </a></h2>';
      }
      ?>
</h2>
</center>
