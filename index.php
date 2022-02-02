<?php

require 'classes/Mail.php';

$myMail = new Mail('dehainaut.angelique@orange.fr','message', 'envoi d\'un message', 'angelique.dehainaut59@gmail.com');
$myMail->sendMail();