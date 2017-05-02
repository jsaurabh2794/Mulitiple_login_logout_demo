<?php
include 'common/conn.php';
include 'config/encode_decode.php';
include 'common/header.php';



if(isset($_GET['s']))
{
        if($_GET['s']==md5(encode_without_md5("sign_true")))
        {
          include 'common/signup.php';
        }
        elseif ($_GET['s']==md5(encode_without_md5("login_true")))
        {
           include 'common/login.php';
        } elseif ($_GET['s']==md5(encode_without_md5("confirm_message")))
        {
            include 'resources/confirm_msg.php';
        } 
        elseif (isset ($_SESSION['Login'])&& $_SESSION['Login']==1 && $_GET['s']==md5(encode_without_md5("login_success"))) 
        {
            include 'resources/login_logout_msg.php';
        }
        elseif ($_GET['s']==md5(encode_without_md5("login_success"))) {
            include 'resources/login_logout_msg.php';
        }
        elseif ($_GET['s']==md5(encode_without_md5("logout")))
        {
            session_destroy();
            session_abort();
            header('Location:index.php');
        } 
        else {
            echo '<center><h2>Error 404 Not Found</h2></center>';
        }
}
else {
  include 'common/home.php';  
}
include 'common/footer.php';
?>