<?php
   include("config.php");
   include("functions.php");

   if(isset($_POST['username']) && isset($_POST['password'])){

      $username = $_POST['username'];
      $password = $_POST['password'];

      $num = checkLogin($username, $password);

      if($num == 1){

         session_start();
         header('Location: poll.php');
         exit();

      }

   }

?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
          
          .submit { 
          background-color: #000000; 
              border: none;
              background-image: linear-gradient(#464d55, #25292e);
              padding: 6px 18px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              cursor: pointer;
              color: #fff; 
          }
          
          .submit:hover {
          box-shadow: rgba(0, 1, 0, .2) 0 2px 8px;
          opacity: .85;
        }

@media (max-width: 420px) {
  .submit {
    height: 48px;
  }
}
          
          
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "login.php" method = "post">
                  <label>Username:</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password:</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit " class="submit"/><br/> 
                  
                   
               </form>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>