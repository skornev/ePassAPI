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
     * Returns Product information based on a search by keyword
     * @param $parameters
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
                throw  new UnknownParameterException(sprintf("Unknown parameter s%", $key));
            }
        }
        // check mandatory fields
        foreach ($allowedParameters as $key => $allowedParameter) {
            if (!isset($parameter[$key])) {
                throw  new  MandatoryParameterException(sprintf("Parameter s% is not set", $key));
            }
        }

        // build uri for a REST request
        UriBuilder::buildUri($parameters);

        //        new Guzzle();

    }

}