<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = 'markivansoletamultiline@gmail.com';
$mail->Password = 'h l j b n z a b r z w z j z u m';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setfrom('markivansoletamultiline@gmail.com');

$mail->addAddress("markivansoleta@gmail.com");

$mail->isHTML(true);

$mail->Subject = $_POST['subject'];

$mail->Body = $_POST['body'];

if(isset($_FILES['emailAttachments'])) {
    for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
        $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
    }
}



// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

$mail->send();

echo "<script>
        alert('Email send')
        document.location.href = 'index.php';
        </script>";
