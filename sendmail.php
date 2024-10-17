<?php
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Send the email
    $to = "kazibwefrank759@gmail.com";
    $subject = "Feedback from $name";
    $body = "Name: $name\nEmail: $email\nFeedback: $feedback";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
      echo "Feedback sent successfully!";
    } else {
      echo "Error sending feedback.";
    }
  }
?>

<!-- Display the form -->
<form method="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="feedback">Feedback:</label>
  <textarea id="feedback" name="feedback"></textarea><br><br>
  <input type="submit" value="Send Feedback">
</form>