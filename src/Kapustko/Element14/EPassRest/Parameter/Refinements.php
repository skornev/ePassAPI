<?php
/**
 * Created by PhpStorm.
 * User: kapustko
 * Date: 26.02.2019
 * Time: 14:42
 */

namespace Kapustko\Element14\EPassRest\Parameter;


use Kapustko\Element14\EPassRest\Exception\InvalidParameterException;

class Refinements
{

    public function __construct()
    {

    }

    /**
     * @param $filter
     * @throws InvalidParameterException
     */
    public function validateFilters($filter)
    {
        $filters =  ['rohsCompliant', 'inStock', 'rohsCompliant,inStock'];
        if (!in_array($filter, $filters)) {
            throw new InvalidParameterException(sprintf("'%s' is not a valid filter, allowed values are %s", $filter, implode(",",$filters )));
        }
    }


}