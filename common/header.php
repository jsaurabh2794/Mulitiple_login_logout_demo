<!DOCTYPE HTML>
<html>
    <head>
        <title>Demo PHP Project | Welcomes You</title>
        <style>
            body{
                margin: 0px;
                padding: 0px;
                background-color: #FFFFD4;
                
            }
            .er_msg{


                width: auto;
                color: red;
                font-family: verdana,sans-serif;
                background-color: black;
                padding: 5px;
                font-size: 13px;
                box-shadow: 0 0px 0.5px 0px blue;
                border-radius: 5px;
                

            }


            li#logo{
                float: left;
                list-style: none;
                margin: 0px;
                
            }
            li.right_nav{
                float: right;
                list-style: none;
                margin-left: 15px;
                margin-right: 15px;
                
                
            }
            nav{
               
              background-color: black;  
              padding: 10px;   
                
                
            }
            a{
                text-decoration: none;
                font-family: fantasy;
                font-size: large;
                color:white; 
                    
            }
            ul#ul_bar{
               
            }
            
            
            
        </style>
    </head>
    <body>
        <nav id="nav_bar">
            <ul id="ul_bar">
                <li id="logo"><a href="index.php">LOGO</a></li>
                <li class="right_nav"><a href="#">About</a></li> 
                <?php
                include 'conn.php';
                if(isset($_SESSION['Login']) && $_SESSION['Login']==1)
                {
                    
                    
                    echo '<li class="right_nav"><a href="http://localhost/myproject/MyDemoPHPProject/index.php?s='.encode("logout").'">Logout</a></li>';
                    echo '<li class="right_nav"><a href="">'.$_SESSION['Name'].'</a></li>';
                }
               else {
                     echo '<li class="right_nav"><a href="http://localhost/myproject/MyDemoPHPProject/index.php?s='.encode("login_true").'">Login</a></li>';
                     echo '<li class="right_nav"><a href="http://localhost/myproject/MyDemoPHPProject/index.php?s='.encode("sign_true").'">SignUp</a></li>';
               }
                ?>
               echo '';
                
                
            </ul>
        </nav>
        
        
 


