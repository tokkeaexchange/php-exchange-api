<?php

require_once '../Api.php';
require_once '../vendor/autoload.php';

/*
 *  The endpoint of the public part of the API.
 *
 * */

$api = new Tokkea\Api();

$response = $api->markets();
print_r($response);