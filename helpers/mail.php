<?php
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-29 22:29:10
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-07-02 12:05:49
 */

define("MAIL_HOST","mail.joymojumder.com");
define("MAIL_PORT","465");
define("MAIL_USERNAME","hi@joymojumder.com");
define("MAIL_PASSWORD","9ZfX@7RXV53U");

function sendMail($email, $subject, $body, $title){

    require '../phpMailer/class.phpmailer.php';
    require '../phpMailer/PHPMailerAutoload.php';
    require '../phpMailer/class.smtp.php'; 
    
    $mail = new PHPMailer;
    $mail->SMTPDebug = 2;
    $mail->isSMTP(true);
    $mail->Host= MAIL_HOST;
    $mail->Port= MAIL_PORT;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure= 'ssl';

    $mail->Username= MAIL_USERNAME;
    $mail->Password= MAIL_PASSWORD;
    $mail->setFrom('hi@joymojumder.com', $title);
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject= $subject;
    $mail->Body= $body;

    if(!$mail->send()){
    	header("location: /login");
    }else{
        header("location: /login?status=3");
    }
}