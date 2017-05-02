<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include '../conn.php';
if(isset($_GET))
{   
    if($_GET['s']=="sign_true")
    {   
     signup($con); 
    }
 elseif ($_GET['s']=="login") 
    {
       login($con);
    } 
}


function signup($con)
{
    
$name= mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$mob= mysqli_real_escape_string($con,$_POST['mob']);
$pass= mysqli_real_escape_string($con,$_POST['pass']);

$sql="INSERT into user_info (Name,Email,Mobile,Password) values ('$name','$email','$mob','$pass')";
$sql_1="SELECT * from user_info where Email='$email' and Mobile='$mob' ";
$rslt_check=mysqli_query($con, $sql_1);

if(mysqli_num_rows($rslt_check)>=1)
{
  echo '1';
}  
else if(mysqli_query($con, $sql))
{
  echo '2';
}  
else 
{
  echo '3';  
}


}

function login($con)
{
   $email= mysqli_real_escape_string($con,$_POST['email']);
   $pass= mysqli_real_escape_string($con,$_POST['pass']);
   
   $sql_email_check="select * from user_info where Email='$email'";
   $result_email=mysqli_query($con, $sql_email_check);
   
   $sql="select * from user_info where Email='$email' and Password='$pass'";
   $result=  mysqli_query($con, $sql);
   
   if(mysqli_num_rows($result_email)!=0)
     {
       if(mysqli_num_rows($result)>=1)
       {
            while ($row = mysqli_fetch_row($result)) {
             $_SESSION['Login']=1;
             $_SESSION['Name']=$row[1];
             $_SESSION['Email']=$row[2];
               
           } 
           echo '1';
       }
       else 
       {
           echo '2';
       }
     }
 else 
     {
      echo "3";
     }
   
}



