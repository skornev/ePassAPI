<?php
/**
 * User: kapustko
 * Date: 27.02.2019
 * Time: 11:51
 */

//Returns Product information based on a search of the element14 / Newark element14 / Farnell element14 order code

use Kapustko\Element14\EPassRest\Api;
use Kapustko\Element14\EPassRest\Exception\RestApiException;

$parameters = [
    'callInfo.apiKey' => '',
    'term' => 'id:1278613',
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
