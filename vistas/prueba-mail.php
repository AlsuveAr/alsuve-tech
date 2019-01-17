    <?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    require '../vendor/autoload.php';

    //$email_user = "TU_EMAIL";
    //$email_password = "TU_PASSWORD";
    $the_subject = "Phpmailer prueba by Evilnapsis.com";
    $address_to = "alsuve98@gmail.com";
    $from_name = "Kevin";

    $mail = new PHPMailer;
    $mail->isSMTP();
    //$mail->SMTPDebug = 2;
    $phpmailer->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465; //587
    $mail->SMTPAuth = true;
    $mail->Username = 'alsuve.uni@gmail.com';
    $mail->Password = 'fea121974';
    $mail->setFrom($mail->Username, 'Alsuve');
    //$mail->addReplyTo($mail->Username, 'Alsuve');
    $mail->addAddress( $address_to);
    $mail->Subject = 'PHPMailer SMTP message';
    //$mail->msgHTML(file_get_contents('message.html'), __DIR__); para inportar un html personalizado
    $mail->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
    $mail->Body .= "<p>Mensaje personalizado</p>";
    $mail->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
    $mail->AltBody = 'This is a plain text message body';
    $mail->IsHTML(true);
    $mail->addAttachment('test.txt');
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }

/*fuente
https://evilnapsis.com/2017/02/24/enviar-emails-con-la-libreria-phpmailer-y-configurar-gmail/


    $email_user = "TU_EMAIL";
$email_password = "TU_PASSWORD";
$the_subject = "Phpmailer prueba by Evilnapsis.com";
$address_to = "evilnapsis@gmail.com";
$from_name = "Evilnapsis";

$phpmailer = new PHPMailer();
// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email
$phpmailer->Subject = $the_subject; 
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);
$phpmailer->Send();
*/
?>
<h1>hola</h1>