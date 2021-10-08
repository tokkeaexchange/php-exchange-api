<?php

require_once '../Api.php';
require_once '../vendor/autoload.php';

/*
 *  The endpoint of the public part of the API.
 *
 * */

$api = new Tokkea\Api();

$market = 'ETH_BTC';
$interval = '1m';

$response = $api->kline($market, $interval);
print_r($response . PHP_EOL);