<?php

require_once("smtpmail.php");

$smtp = new SMTPMail();
$smtp->setDebugPrint(true);
$smtp->createSimpleLetter("Приветик", "Привееет! <h1>:3</h1>", "html");
$smtp->sendLetter();

