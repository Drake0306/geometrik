<?php

  $from_email = $_POST['email'];
  $to      = $from_email;
  $subject = 'Demo Request';
  $message = 'Thank You for The Request We will get back to you shortly!';
  $headers = 'From: contact@geometrik.space'       . "\r\n" .
               'Reply-To: contact@geometrik.space' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  echo '<script type="text/javascript">alert("Sent Sucessfully"); </script>';
  echo "<script type='text/javascript'> window.open('','_parent',''); window.close(); </script>";

?>
