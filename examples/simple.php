<?php
/**
 * @author Dmitry Gladyshev <deel@email.ru>
 * @created 07.11.16 12:38
 */

require '../vendor/autoload.php';

use Yandex\Direct\Client;

$client = new Client(getenv('_LOGIN_'), getenv('_TOKEN_'));

// just...
$resp = $client->campaigns->get(['Types' => ['TEXT_CAMPAIGN']], ['Funds']);

print_r($resp);