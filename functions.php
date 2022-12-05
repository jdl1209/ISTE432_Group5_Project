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

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  // Get the user's ID from the session
  $user_id = $_SESSION['user_id'];

  // Connect to the database
  $conn = new mysqli('localhost', 'database_username', 'database_password', 'database_name');

  // Check if the user has voted in the election
  $query = "SELECT * FROM votes WHERE user_id = '$user_id' AND election_id = '$election_id'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    // The user has voted, get the voting method
    $vote = $result->fetch_assoc();
    $voting_method = $vote['ballot_type'];

    if ($voting_method == 'paper') {
      // The user voted using a paper ballot
        return 0;
    } else if ($voting_method == 'online') {
      // The user voted using an online ballot
      return 1;
    }
  } else {
    // The user has not voted
    return -1;
  }
}

?>


?>
