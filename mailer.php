<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if (empty($_POST['email'])) {
    $email_error = 'Email is empty';
  }
  else {
    $visitor_email = $_POST['email'];

    if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
      $email_error = 'Invalid email';
    }
  }

  if (empty($_POST['message'])) {
    $message_error = 'Message is empty';
  } else {
    $visitor_message = $_POST['message'];
  }

  if (empty($email_error) && empty($message_error)) {

    $visitor_name = $_POST['name'];

    $recipient = "dominique@dominiquethedeveloper.com";
    $subject = "New message from $visitor_name";
    $email_content = "Name: $visitor_name\n";
    $email_content .= "Email: $visitor_email\n\n";
    $email_content .= "Message: \n$visitor_message\n";
    $email_headers = "From: $recipient \r\n";
    $email_headers .= "Reply-To: $visitor_email \r\n";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
      header("Location: http://www.dominiquethedeveloper.com/index.php?success=1#contact");
    } else {
      header("Location: http://www.dominiquethedeveloper.com/index.php?success=-1#contact");
    }

  }

}

?>
