<?php

namespace Kapustko\Element14\EPassRest;

use Kapustko\Element14\EPassRest\Exception\MandatoryParameterException;
use Kapustko\Element14\EPassRest\Exception\UnknownParameterException;

/**
 * User: skornev
 * Date: 2019-02-25
 * Time: 23:22
 */
class Api
{

    /**
     * @param $parameters
     * @return bool|string
     * @throws MandatoryParameterException
     * @throws UnknownParameterException
     */
    public static function searchByKeyword($parameters)
    {


        /**
         * True - mandatory, false - optional
         */
        $allowedParameters = [
            'term' => true,
            'storeInfo.id' => true,
            'resultsSettings.offset' => true,
            'resultsSettings.numberOfResults' => true,
            'resultsSettings.responseGroup' => false,
            'resultsSettings.refinements.filters' => false,
            'callInfo.apiKey' => true,
            'callInfo.omitXmlSchema' => false,
            'callInfo.responseDataFormat' => false,
            'callInfo.callback' => false
        ];

        // check if parameters has a valid name and value
        foreach ($parameters as $key => $parameter) {
            if (!isset($allowedParameters[$key])) {
                throw  new UnknownParameterException(sprintf("Unknown parameter %s", $key));
            }
        }
        // check mandatory fields
        foreach ($allowedParameters as $key => $allowedParameter) {
            if ($allowedParameters[$key] && !isset($parameters[$key])) {
                throw  new  MandatoryParameterException(sprintf("Mandatory parameter %s is not set", $key));
            }
        }

        // build uri for a REST request
        $uri = UriBuilder::buildUri($parameters);

        // get xml|json data
        $data = file_get_contents($uri);

        return $data;
    }

}