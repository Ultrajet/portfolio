<?php

require_once 'vendor/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
  ->setUsername('XXXXX')
  ->setPassword('XXXXX');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Test sujet'))
  ->setFrom(['XXXXX@XXXXX.com' => 'Quentin Serveur'])
  ->setTo(['XXXXX@XXXXX.fr' => 'Quentin Client'])
  ->setBody('Test message');

// Send the message
$numSent = $mailer->send($message);

printf("Sent %d messages\n", $numSent);

//lalala
