<?php

require_once '../Api.php';
require_once '../vendor/autoload.php';

/*
 *  The endpoint of the private part of the API.
 *  You must configure the settings using one of the available methods.
 *  See README.md
 *
 * */

$api = new Tokkea\Api();

$market = 'ETH_BTC';

$response = $api->cancelAllOrders($market);
print_r($response . PHP_EOL);