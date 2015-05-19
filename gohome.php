<?php

require __DIR__ . '/vendor/autoload.php';

$account_sid = '';
$auth_token = '';
$tel_from = '';
$tel_to = '';
$twiml_url = '';

$client = new Services_Twilio($account_sid, $auth_token);

$client->account->calls->create($tel_from, $tel_to, $twiml_url, array(
	'Method' => 'GET',
	'FallbackMethod' => 'GET',
	'StatusCallbackMethod' => 'GET',
	'Record' => 'false',
));
