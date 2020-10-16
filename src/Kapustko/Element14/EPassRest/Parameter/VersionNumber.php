<?php
/**
 * User: kapustko
 * Date: 16.10.2020
 * Time: 16:12
 */

namespace Kapustko\Element14\EPassRest\Parameter;


use Kapustko\Element14\EPassRest\Exception\InvalidParameterException;

class VersionNumber extends AbstractParameter
{
    /**
     * Term constructor.
     * @param $term
     * @throws InvalidParameterException
     */
    public function __construct($version)
    {
        $allowedVersions = ['1.0', '1.1'];
        if (!in_array($version, $allowedVersions)) {
            throw new InvalidParameterException(sprintf("'%s' is not allowed version, allowed values are %s", $version, implode(",",$allowedVersions )));

        }
    }


}