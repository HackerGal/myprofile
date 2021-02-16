//<?php
///if (isset($_POST['email'])) {

// Email info
//  $admin_email = "admin@melzy.co.za";
// $name = $_POST['name'];
///  $email = $_POST['email'];
//  $phone = $_POST['phone'];
//  $message = $_POST['message'];
//  $subject = $_POST['subject'];

  // To send the email
//  mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
//  header('Location: http://melzy.co.za/success.html');
//  echo "Thank you $_GET["name"]";
//  echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
//}
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
  $recipient = "admin@melzy.co.za";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>