<?php

   function checkLogin($username, $password){
      try {


         $sql = "SELECT user_id FROM users WHERE username=$username AND password=$password";
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {

            return 1;

         } else {

            return 0;

         }

      }
      catch(Exception $ex){
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

   function uploadCSV($filename)
   {

      $file = fopen($filename, "r");
      while (($row = fgetcsv($file)) !== FALSE) {

         $stmt = $conn->prepare("INSERT INTO votes (office_id, candidate_id) VALUES (?, ?)");
         $stmt->bind_param("ii", $row[1], $row[2]);
         $stmt->execute();

      }

   }


?>