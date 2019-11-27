<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $visitor_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
  $message_subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
  $visitor_message = filter_var($_POST['message'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

  if (!empty($visitor_email) && !empty($visitor_message)) {

    if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Please use a valid email address</div>';
      header("Location: contact.php#contact-form");

    } else {
      $recipient = "dominique@dominiquethedeveloper.com";

      $email_content = '<h2>Contact Request</h2>
                        <h4>Name:</h4><p>'.$visitor_name.'</p>
                        <h4>Email:</h4><p>'.$visitor_email.'</p>
                        <h4>Message:</h4><p>'.$visitor_message.'</p>
      ';

      $email_headers = "MIME-Version: 1.0" ."\r\n";
      $email_headers .= "Content-Type: text/html; charset=utf-8" ."\r\n";
      $email_headers .= "From: " .$visitor_name. "<".$visitor_email.">". "\r\n";
      $email_headers .= "Reply-To: $visitor_email \r\n";

      if (mail($recipient, $message_subject, $email_content, $email_headers)) {
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Your message has been sent!</div>';
        header("Location: contact.php#contact-form");

      } else {
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Ooops! Something went wrong.</div>';
        header("Location: contact.php#contact-form");

      }

    }

  } else {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Please add a valid email address and message.</div>';
    header("Location: contact.php#contact-form");
  }

}
