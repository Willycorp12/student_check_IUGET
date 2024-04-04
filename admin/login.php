<?php
require_once ('../includes/dbcon.php'); // Include the database connection file
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  global $conn;
  // Get the entered login credentials
  $password = $_POST["password"];

  // Check if the phone toggle is selected
  if (isset($_POST["phone"])) {
    $phone = $_POST["phone"];

    // Validate the phone login
    // Perform additional phone login validation if needed

    // Prepare and execute the SQL query
    $query = "SELECT * FROM users WHERE phone = :phone AND password = :password";
    $statement = $conn->prepare($query);
    $statement->execute(array(":phone" => $phone, ":password" => $password));

    // Check if the login is successful
    if ($statement->rowCount() > 0) {
      // Phone login successful
      // Perform any additional actions after successful login
      echo "Phone login successful!";
    } else {
      // Phone login failed
      echo "Invalid phone or password.";
    }
  } else {
    // Email login
    $email = $_POST["email"];

    // Validate the email login
    // Perform additional email login validation if needed

    // Prepare and execute the SQL query
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $statement = $conn->prepare($query);
    $statement->execute(array(":email" => $email, ":password" => $password));

    // Check if the login is successful
    if ($statement->rowCount() > 0) {
      // Email login successful
      // Perform any additional actions after successful login
      echo "Email login successful!";
    } else {
      // Email login failed
      echo "Invalid email or password.";
    }
  }
}
?>

