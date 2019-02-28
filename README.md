# ePassAPI - access Farnell Element 14 products information using Farnell Element 14 ePassAPI

## Examples:

### Returns Product information based on a search by keyword

```php
<?php 

use Kapustko\Element14\EPassRest\Api;
use Kapustko\Element14\EPassRest\Exception\RestApiException;



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

```
### Returns Product information based on a search of the element14 / Newark element14 / Farnell element14 order code

```php
<?php

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
```
### Returns Product information based on a search of the manufacturer part number

```php
<?php

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
```
