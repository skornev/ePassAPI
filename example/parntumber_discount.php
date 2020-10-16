<?php


//Note: SECRET_KEY should be received from Farnell first

use Kapustko\Element14\EPassRest\Api;
use Kapustko\Element14\EPassRest\Exception\RestApiException;

$parameters = [
    'callInfo.apiKey' => '',
    'term' => 'manuPartNum:LM339ADT',
    'storeInfo.id' => 'uk.farnell.com',
    'resultsSettings.offset' => 0,
    'resultsSettings.numberOfResults' => 1,
    'callInfo.responseDataFormat' => 'json'
];

$d = gmdate("yy-m-d\TH:i:s.ms");

$hmac = base64_encode(hash_hmac('sha1', 'searchByManufacturerPartNumber'.$d, "SECRET_KEY", true));

$parametersUserInfo = [
    'userInfo.signature'=> $hmac,
    'userInfo.timestamp'=> $d,
    'userInfo.customerId'=>''
];
$parameters = array_merge($parameters, $parametersUserInfo);

try {
    echo Api::searchByKeyword($parameters);
} catch (RestApiException $e) {
    echo $e->getMessage();
}
