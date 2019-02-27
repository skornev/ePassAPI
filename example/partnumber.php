<?php
/**
 * User: kapustko
 * Date: 27.02.2019
 * Time: 11:54
 */

//Returns Product information based on a search of the manufacturer part number

use Kapustko\Element14\EPassRest\Api;

$parameters = [
    'callInfo.apiKey'=>'manuPartNum:LM339ADT',
    'term'=>'any:fuse',
    'storeInfo.id' => 'manuPartNum:LM339ADT',
    'resultsSettings.offset' => 0,
    'resultsSettings.numberOfResults' => 1,
    'callInfo.responseDataFormat' => 'xml'
];

Api::searchByKeyword($parameters);
