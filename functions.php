<?php

function checkLogin($username, $password){

        // username and password sent from form 
        
        $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($count == 1) {
           
           $_SESSION['login_user'] = $username;
           
           header("location: ballot.php");
        }
        else {
           $error = "Your Login Name or Password is invalid";
        }
     }

?>
