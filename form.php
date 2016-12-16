<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $from = 'From: deeptailor.com';
   $to = 'deeptailor@gmail.com';
   $subject = 'Test Email';

   $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 ?>


 <?php
    if($_POST['submit']) {
      if (mail($to, $subject, $body, $from)){
        echo '<p> Thank You for your email</p>';
      }else{
        echo '<p>Oops! An Error occured. Please try again</p>';
      }
    }
 
  ?>
