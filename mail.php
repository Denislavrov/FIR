<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 26/11/2018
 * Time: 16:55
 */

$message = $_POST['name'] . " оставил заявку на сайте.\r\n
            телефон клиента: " . $_POST['phone'] . "\r\n
            почта клиента: " . $_POST['mail'] . "\r\n
            коментарии: " . $_POST['comment'] . "\r\n
            высота елки: " . $_POST['qty'] . "\r\n
            елка №: " . $_POST['item'];
$a = mail("den.lavrov.95@mail.ru,nikolai_lazarev-@mail.ru", "заявка на сайте", $message, "from: elka-chel\r\n");
if ($a)
    echo "заявка отправлена!";