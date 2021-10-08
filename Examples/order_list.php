<?php

require_once '../Api.php';
require_once '../vendor/autoload.php';

/*
 *  The endpoint of the public part of the API.
 *
 * */

$api = new Tokkea\Api();

$market = 'ETH_BTC';

$response = $api->orders($market);
print_r($response . PHP_EOL);