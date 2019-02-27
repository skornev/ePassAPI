<?php
/**
 * User: skornev
 * Date: 2019-02-25
 * Time: 23:41
 */

namespace Kapustko\Element14\EPassRest\Parameter;


use Kapustko\Element14\EPassRest\Exception\InvalidParameterException;

class ResultsSettings extends AbstractParameter
{


    public function __construct()
    {
    }

    /**
     * @param int $offset
     */
    public function validateOffset($offset)
    {
    }

    /**
     * @param int $numberOfResults
     */
    public function validateNumberOfResults($numberOfResults)
    {
    }

    /**
     * @param Refinements $refinements
     */
    public function validateRefinements($refinements)
    {
    }


    /**
     * @param $responseGroup
     * @throws InvalidParameterException
     */
    public function validateResponseGroup($responseGroup)
    {
        $responseGroups = ['small', 'medium', 'large', 'prices', 'inventory', 'none'];

        if (!in_array($responseGroup, $responseGroups)) {
            throw  new InvalidParameterException(sprintf("'%s' is not a valid response group, allowed are %s", $responseGroup, implode(",", $responseGroups)));

        }

    }


}