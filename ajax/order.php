<?php
/* Sites-Stroy.ru by iProger */
$fio = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$adminEmail = 'a.krylov@topface.com';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: '.$adminEmail . "\r\n";
$headers .= 'From: StarMaster <noreply@starsmaster.net>' . "\r\n";

$mess = "Новый заказ StarMaster. <br/>ФИО: ".$fio."<br/>"."E-mail: ".$email."<br/>"."<br/>Телефон: ".$tel;

mail($adminEmail, "Новый заказ", $mess, $headers);

?>