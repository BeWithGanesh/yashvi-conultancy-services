<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contactno = $_POST['contactno'];
  $position = $_POST['position'];
  $remark = $_POST['remark'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yashvi.test@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'rgyashika'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('yashvi.test@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('yashvi.test@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Jobseeker Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Contact No: $contactno <br>Need of Position: $position <br>Remark : $remark</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      