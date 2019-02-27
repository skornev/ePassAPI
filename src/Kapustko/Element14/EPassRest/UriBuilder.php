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

        foreach ($parameters as $parameter => $value) {
            $classParameters = explode('.', $parameter);

            $class = '\Kapustko\Element14\EPassRest\Parameter\\';
            foreach ($classParameters as $index => $classParameter) {
                if ($index + 1 != count($classParameters) || count($classParameters) == 1) {
                    $class .= ucfirst($classParameters[0]);


                }
            }

            if (count($classParameters) > 1) {
                $parameterObject = new $class();
                $parameterObject->{'validate' . end($classParameters)}($value);
            } else {
                new $class($value);
            }

            $uri .= '&' . $parameter . '=' . urlencode($value);
        }

        return $uri;
    }
}