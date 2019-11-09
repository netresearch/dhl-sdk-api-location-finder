<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Soap;

use Dhl\Sdk\LocationFinder\Model\RequestType\getBranchesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getBranchesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsFilialeDirektByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsFilialeDirektByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getBranchesByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getBranchesByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsFilialeDirektByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsFilialeDirektByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsPaketboxesByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsPaketboxesByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPaketboxesByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPaketboxesByCoordinateResponse;

/**
 * Class Client
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class Client extends AbstractClient
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * SoapServiceFactory constructor.
     * @param \SoapClient $soapClient
     */
    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * @param getPackstationsByCoordinate $requestType
     * @return getPackstationsByCoordinateResponse
     */
    public function getPackstationsByCoordinate(
        getPackstationsByCoordinate $requestType
    ): getPackstationsByCoordinateResponse {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPackstationsByAddress $requestType
     * @return getPackstationsByAddressResponse
     */
    public function getPackstationsByAddress(getPackstationsByAddress $requestType): getPackstationsByAddressResponse
    {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getBranchesByAddress $requestType
     * @return getBranchesByAddressResponse
     */
    public function getBranchesByAddress(getBranchesByAddress $requestType): getBranchesByAddressResponse
    {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getBranchesByCoordinate $requestType
     * @return getBranchesByCoordinateResponse
     */
    public function getBranchesByCoordinate(getBranchesByCoordinate $requestType): getBranchesByCoordinateResponse
    {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPackstationsPaketboxesByAddress $requestType
     * @return getPackstationsPaketboxesByAddressResponse
     */
    public function getPackstationsPaketboxesByAddress(
        getPackstationsPaketboxesByAddress $requestType
    ): getPackstationsPaketboxesByAddressResponse {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPackstationsPaketboxesByCoordinate $requestType
     * @return getPackstationsPaketboxesByCoordinateResponse
     */
    public function getPackstationsPaketboxesByCoordinate(
        getPackstationsPaketboxesByCoordinate $requestType
    ): getPackstationsPaketboxesByCoordinateResponse {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPaketboxesByAddress $requestType
     * @return getPaketboxesByAddressResponse
     */
    public function getPaketboxesByAddress(getPaketboxesByAddress $requestType): getPaketboxesByAddressResponse
    {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPaketboxesByCoordinate $requestType
     * @return getPaketboxesByCoordinateResponse
     */
    public function getPaketboxesByCoordinate(getPaketboxesByCoordinate $requestType): getPaketboxesByCoordinateResponse
    {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPackstationsFilialeDirektByAddress $requestType
     * @return getPackstationsFilialeDirektByAddressResponse
     */
    public function getPackstationsFilialeDirektByAddress(
        getPackstationsFilialeDirektByAddress $requestType
    ): getPackstationsFilialeDirektByAddressResponse {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param getPackstationsFilialeDirektByCoordinate $requestType
     * @return getPackstationsFilialeDirektByCoordinateResponse
     */
    public function getPackstationsFilialeDirektByCoordinate(
        getPackstationsFilialeDirektByCoordinate $requestType
    ): getPackstationsFilialeDirektByCoordinateResponse {
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }
}
