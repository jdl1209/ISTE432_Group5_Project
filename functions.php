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

function checkBallotType(){
// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  // Get the user's ID from the session
  $user_id = $_SESSION['user_id'];

  // Connect to the database
  $conn = new mysqli('localhost', 'database_username', 'database_password', 'database_name');

  // Check if the user has voted in the election
  $query = "SELECT * FROM votes WHERE user_id = '$user_id' AND election_id = '$election_id'";
  $result = $conn->query($sql);

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
   
function getSocietyName() {
  // Query to get the society name from the database
  $query = "SELECT society_name FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["society_name"];
  } else {
    // Return null if there are no results
    return null;
  }
}
   
function getSocietContact() {
  // Query to get the society name from the database
  $query = "SELECT society_contact FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["society_contact"];
  } else {
    // Return null if there are no results
    return null;
  }
}
   
function getElectionName() {
  // Query to get the society name from the database
  $query = "SELECT election_name FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["election_name"];
  } else {
    // Return null if there are no results
    return null;
  }
}

function getSocietyPhoneNumber() {
  // Query to get the society name from the database
  $query = "SELECT society_phone_number FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["society_phone_number"];
  } else {
    // Return null if there are no results
    return null;
  }
}
   
function getSocietyColor() {
  // Query to get the society name from the database
  $query = "SELECT society_color FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["society_color"];
  } else {
    // Return null if there are no results
    return null;
  }
}
   
function getSocietyLogo() {
  // Query to get the society name from the database
  $query = "SELECT society_logo FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["society_phone_number"];
  } else {
    // Return null if there are no results
    return null;
  }
}
   
function getSocietyLogo() {
  // Query to get the society name from the database
  $query = "SELECT society_logo FROM election_info";

  // Execute the query and get the result
  $result = mysqli_query($query);

  // Check if there are any results
  if (mysqli_num_rows($result) > 0) {
    // Get the first row from the result
    $row = mysqli_fetch_assoc($result);

    // Return the society name
    return $row["society_logo"];
  } else {
    // Return null if there are no results
    return null;
  }
}
   
?>
