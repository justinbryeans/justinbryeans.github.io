<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: justinbryeans.github.io';
  $to = 'justinbryeans@gmail.com';
  $subject = 'Personal Site Email Inquiry';

  $body = "From: $name\n Email: $email\n Message: $message";
?>
<?php
  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)){
      echo '<p>Thank you for the note!</p>';
    } else {
      echo '<p>An error occured. Please try sending your message again.</p>';
    }
  }
?>
