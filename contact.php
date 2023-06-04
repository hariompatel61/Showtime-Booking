<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $to = "hariompatel3369@gmail.com";
      $subject = "New Message from Contact Form";
      $body = "Name: $name\nEmail: $email\nMessage: $message";

      // Send the email
      mail($to, $subject, $body);
   }
?>
