<?php
if (isset($_POST['email'])) {

// Email info
  $admin_email = "admin@melzy.co.za";
  //$admin_email = "mmolifie@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

// To send the email
  mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
  header('Location: http://melzy.co.za/success.html');
//  echo "Thank you $_GET["name"]";
//  echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
 }

