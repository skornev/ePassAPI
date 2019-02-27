<?php
/**
 * User: kapustko
 * Date: 27.02.2019
 * Time: 11:54
 */

//Returns Product information based on a search of the manufacturer part number

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

try {
    echo Api::searchByKeyword($parameters);
} catch (RestApiException $e) {
    echo $e->getMessage();
}
