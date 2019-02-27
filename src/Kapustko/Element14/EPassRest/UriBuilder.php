<?php
/**
 * User: kapustko
 * Date: 27.02.2019
 * Time: 12:49
 */

namespace Kapustko\Element14\EPassRest;


class UriBuilder
{

    public static function buildUri($parameters)
    {
        $uri = 'https://api.element14.com/catalog/products?';

        foreach ($parameters as $key => $parameter) {
            $classParameters = explode('.', $key);

            $class = '\Kapustko\Element14\EPassRest\Parameter\\';
            foreach ($classParameters as $index => $classParameter) {
                if ($index + 1 != count($classParameters) || count($classParameters) == 1) {
                    $class .= ucfirst($classParameters[0]);

                    $parameterObject = new $class();

                    if (count($classParameters) > 1) {
                        $parameterObject->{'validate'}($parameter);
                    }
                }
            }

            $uri .= '&' . $key . '=' . urlencode($parameter);
        }
    }
}