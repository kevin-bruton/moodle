<?php 
$to = 'kevin.jose.bs@gmail.com';

$subject = 'englishonline.com.es verification';
$message =  '<html><body>Please verify your email clicking on the following link:<br>';
$message .= '<a href="http://www.englishonline.com.es">Verify</a><br><br>';
$message .= 'Thanks!<br></body></html>';

$headers = 'From: NoReply <no-reply@englishonline.com.es>'."\r\n";
$headers .= 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
mail($to,$subject,$message,$headers);
echo '<p>Email Data sent: </p><p>Headers: <br>'.$headers.'</p><p>To <br>'.$to.'</p><p>Message: <br>'.$message.'</p>';
?>

