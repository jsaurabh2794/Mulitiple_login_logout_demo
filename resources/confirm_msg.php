<center><div>
    <h2 style="color: blueviolet;font-family: verdana;">
   <?php
    if(isset($_GET['g']))
    {
       
            echo '<h1>'.$_GET['g'].'</h1>';
            
    }  else {
        
        header('Location:index.php');  
    }
     
    ?>
    
    
    </h2>
    
    
</div>
</center>
