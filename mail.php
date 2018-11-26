<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 26/11/2018
 * Time: 16:55
 */

$data = json_decode($_POST['data'], true);
$message = $data['name'] . " оставил заявку на сайте.\r\nтелефон клиента: " . $data['phone'] .
    "\r\nпочта клиента: " . $data['mail'] . "\r\nкоментарий: " . $data['comment'];
$a = mail("Den.lavrov.95@mail.ru", "Заявка на сайте", $message, "From: elka-chel\r\n");
if ($a)
    echo "Заявка отправлена!";
?>