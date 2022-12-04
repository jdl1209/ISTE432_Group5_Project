<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">


<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
</script> 
    <title>
       Logged Out!
    </title>
 
    <link rel="stylesheet" href="confirmation_look.css"> 
    
  
    
    <body> 
      
        
        
        
        <form name = "form" >
  
        <!-- Details -->
  
       
         <div class="main-content">
        <h1> You have been logged out! </h1>
        <p class="main-contentbody" data-lead-id="main-content-body"> You can now close this window! 
           </p>   
             
             
    </div>
        </form>    
        
</body>
  
</html>