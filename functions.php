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

   function checkAdminLogin($username, $password){

      $sql = "SELECT admin_id FROM admin WHERE username=$username AND password=$password";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

         return 1;

      } else {

         return 0;

      }

   }

?>