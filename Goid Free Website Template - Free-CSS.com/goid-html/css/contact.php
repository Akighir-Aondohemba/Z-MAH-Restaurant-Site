<?php
// Check if the form has been submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

  // Sanitize the input data
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

  // Send an email to the recipient
  mail('zmahcookery@gmail.com', 'Contact Form Submission', $message, 'From: ' . $email);

  // Redirect the user to a success page
  header('Location: /contact-success');

} else {

  // Display an error message
  echo 'Please fill out all of the fields.';

}

?>
