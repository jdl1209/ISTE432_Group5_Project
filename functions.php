<?php

   function checkLogin($username, $password){

      $sql = "SELECT user_id FROM users WHERE username=$username AND password=$password";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

         return 1;

      } else {

         return 0;

      }

   }

?>