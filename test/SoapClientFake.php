<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Sdk\LocationFinder\Test;

/**
 * Fake SOAP client used in tests.
 *
 * @package Dhl\Sdk\LocationFinder\Test
 * @author  Rico Sonntag <rico.sonntag@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class SoapClientFake extends \SoapClient
{
    /**
     * SoapClientFake constructor.
     *
     * PHPUnit does not pass through the wsdl to the client constructor, need to add it by overriding original one.
     *
     * @param $wsdl
     * @param mixed[]|null $options
     */
    public function __construct($wsdl, array $options = null)
    {
        $wsdl = __DIR__ . '/Service/standortsuche-api-1.1.wsdl';
        parent::__construct($wsdl, $options);
    }
}
