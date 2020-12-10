<?php
/**
 * User: skornev
 * Date: 2019-02-25
 * Time: 23:46
 */

namespace Kapustko\Element14\EPassRest\Parameter;


use Kapustko\Element14\EPassRest\Exception\InvalidParameterException;

class CallInfo extends AbstractParameter
{

    /**
     * CallInfo constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $apiKey
     * @throws InvalidParameterException
     */
    public function validateApiKey($apiKey)
    {
        if (empty($apiKey)) {
            throw  new InvalidParameterException(sprintf("ApiKey is empty"));
        }
        if (strlen($apiKey) != 24) {
            throw  new InvalidParameterException(sprintf("'%s%' is not a valid api key should be 24 length", $apiKey));
        }
    }

    /**
     * @param $omitXmlSchema
     * @throws InvalidParameterException
     */
    public function validateOmitXmlSchema($omitXmlSchema)
    {
        $omitXmlSchemas = ['true', 'boolean'];

        if (!in_array($omitXmlSchema, $omitXmlSchemas)) {
            throw  new InvalidParameterException(sprintf("'%s%' is not a omit xml schema value, allowed values %s", $omitXmlSchema, implode(",",$omitXmlSchemas )));
        }
    }


    /**
     * @param $responseDataFormat
     * @throws InvalidParameterException
     */
    public function validateResponseDataFormat($responseDataFormat)
    {
        $formats = ['xml', 'json'];

        if (!in_array($responseDataFormat, $formats)) {
            throw  new InvalidParameterException(sprintf("'%s%' is not a valid response format, allowed values  %s", $responseDataFormat,  implode(",",$formats )));
        }
    }

    /**
     * @param $callback
     */
    public function validateCallback($callback)
    {

    }

}