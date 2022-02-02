<?php

require './classes/Mail.php';

$myMail = new Mail();
$myMail->userMail('dehainaut.angelique@orange.fr','message', 'envoi d\'un message');