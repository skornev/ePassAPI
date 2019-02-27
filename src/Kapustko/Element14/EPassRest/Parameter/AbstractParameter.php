<?php
/**
 * Created by PhpStorm.
 * User: kapustko
 * Date: 26.02.2019
 * Time: 22:54
 */

namespace Kapustko\Element14\EPassRest\Parameter;


use Kapustko\Element14\EPassRest\Exception\UnknownMethodException;
use Kapustko\Element14\EPassRest\Exception\UnknownParameterException;

abstract class AbstractParameter
{

    /**
     * @param $parameter
     * @throws UnknownMethodException
     * @throws UnknownParameterException
     */
    public function validate($parameter)
    {
        if (empty($parameter)) {
            throw  new UnknownParameterException(sprintf("Parameter  '%s' can't be empty", $parameter));
        }

        $methodName = 'validate' . ucfirst($parameter);
        if (method_exists($this, $methodName)) {
            $this->{$methodName}();
        } else {
            throw  new UnknownMethodException(sprintf("Method '%s' not found in %s", $methodName, get_class($this)));
        }
    }
}