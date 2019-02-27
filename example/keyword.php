<?php
/**
 *
 * User: kapustko
 * Date: 26.02.2019
 * Time: 22:00
 */

use Kapustko\Element14\EPassRest\Api;
use Kapustko\Element14\EPassRest\Exception\RestApiException;

//Returns Product information based on a search by keyword

$parameters = [
    'callInfo.apiKey' => '',
    'term' => 'any:fuse',
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