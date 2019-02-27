<?php
/**
 * User: kapustko
 * Date: 27.02.2019
 * Time: 11:56
 */

namespace Kapustko\Element14\EPassRest\Parameter;


use Kapustko\Element14\EPassRest\Exception\InvalidParameterException;

class Term extends AbstractParameter
{
    /**
     * Term constructor.
     * @param $term
     * @throws InvalidParameterException
     */
    public function __construct($term)
    {
        $allowedPrefixes = ['any', 'id', 'manuPartNum'];
        $termSlugs = explode(':', $term);
        if (!in_array($termSlugs[0], $allowedPrefixes)) {
            throw new InvalidParameterException(sprintf("'%s' is not allowed prefix, allowed values are %s", $termSlugs[0], implode(",",$allowedPrefixes )));

        }
    }


}