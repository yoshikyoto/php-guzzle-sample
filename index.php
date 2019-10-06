<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->get('');
$result = json_decode($response->getBody(), true);
