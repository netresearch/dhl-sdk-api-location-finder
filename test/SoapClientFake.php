<?php

/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Sdk\LocationFinder\Test;

/**
 * Fake SOAP client used in tests.
 *
 * @author  Rico Sonntag <rico.sonntag@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class SoapClientFake extends \SoapClient
{
    const WSDL = __DIR__ . '/Provider/_files/standortsuche/standortsuche-api-1.1.wsdl';

    /**
     * SoapClientFake constructor.
     *
     * PHPUnit does not pass through the wsdl to the client constructor, need to add it by overriding original one.
     *
     * @param string $wsdl
     * @param mixed[]|null $options
     * @throws \SoapFault
     */
    public function __construct($wsdl, array $options = null)
    {
        parent::__construct(self::WSDL, $options);
    }
}
