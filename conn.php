<?php

session_start();
date_default_timezone_set("Asia/Kolkata");

//
//ini_set('mysql.connect_timeout', 300);
//ini_set('default_socket_timeout', 300); 

$host='localhost';
$user='root';
$passwd='';
$dbname='Demo_proj';
$con=  mysqli_connect($host,$user,$passwd,$dbname);

if(mysqli_connect_errno()){
    mysqli_close($con);
    header('Location: http://google.com');
}
