<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 27/11/2018
 * Time: 17:35
 */


/**callBack*/

$BackMessage = $_POST['Backname'] . " оставил заявку на сайте.\r\n
            телефон клиента: " . $_POST['Backphone'];

$backCall = mail("den.lavrov.95@mail.ru,nikolai_lazarev-@mail.ru", "заявка на обратный звонок", $BackMessage, "from: callback\r\n");

if($backCall)
    echo "Ваша заявка принята!\r\n Мы перезвоним вам в ближайшее время";
