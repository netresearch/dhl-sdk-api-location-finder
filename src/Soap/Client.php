<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Soap;

use Dhl\Sdk\LocationFinder\Model\RequestType\GetBranchesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetBranchesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsFilialeDirektByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsFilialeDirektByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetBranchesByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetBranchesByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsFilialeDirektByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsFilialeDirektByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsPaketboxesByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsPaketboxesByCoordinateResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPaketboxesByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPaketboxesByCoordinateResponse;

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
     * @param GetPackstationsByCoordinate $requestType
     * @return GetPackstationsByCoordinateResponse
     * @throws \SoapFault
     */
    public function getPackstationsByCoordinate(
        GetPackstationsByCoordinate $requestType
    ): GetPackstationsByCoordinateResponse {
        /** @var GetPackstationsByCoordinateResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPackstationsByAddress $requestType
     * @return GetPackstationsByAddressResponse
     * @throws \SoapFault
     */
    public function getPackstationsByAddress(GetPackstationsByAddress $requestType): GetPackstationsByAddressResponse
    {
        /** @var GetPackstationsByAddressResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetBranchesByAddress $requestType
     * @return GetBranchesByAddressResponse
     */
    public function getBranchesByAddress(GetBranchesByAddress $requestType): GetBranchesByAddressResponse
    {
        /** @var GetBranchesByAddressResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetBranchesByCoordinate $requestType
     * @return GetBranchesByCoordinateResponse
     * @throws \SoapFault
     */
    public function getBranchesByCoordinate(GetBranchesByCoordinate $requestType): GetBranchesByCoordinateResponse
    {
        /** @var GetBranchesByCoordinateResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPackstationsPaketboxesByAddress $requestType
     * @return GetPackstationsPaketboxesByAddressResponse
     * @throws \SoapFault
     */
    public function getPackstationsPaketboxesByAddress(
        GetPackstationsPaketboxesByAddress $requestType
    ): GetPackstationsPaketboxesByAddressResponse {
        /** @var GetPackstationsPaketboxesByAddressResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPackstationsPaketboxesByCoordinate $requestType
     * @return GetPackstationsPaketboxesByCoordinateResponse
     * @throws \SoapFault
     */
    public function getPackstationsPaketboxesByCoordinate(
        GetPackstationsPaketboxesByCoordinate $requestType
    ): GetPackstationsPaketboxesByCoordinateResponse {
        /** @var GetPackstationsPaketboxesByCoordinateResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPaketboxesByAddress $requestType
     * @return GetPaketboxesByAddressResponse
     * @throws \SoapFault
     */
    public function getPaketboxesByAddress(GetPaketboxesByAddress $requestType): GetPaketboxesByAddressResponse
    {
        /** @var GetPaketboxesByAddressResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPaketboxesByCoordinate $requestType
     * @return GetPaketboxesByCoordinateResponse
     * @throws \SoapFault
     */
    public function getPaketboxesByCoordinate(GetPaketboxesByCoordinate $requestType): GetPaketboxesByCoordinateResponse
    {
        /** @var GetPaketboxesByCoordinateResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPackstationsFilialeDirektByAddress $requestType
     * @return GetPackstationsFilialeDirektByAddressResponse
     * @throws \SoapFault
     */
    public function getPackstationsFilialeDirektByAddress(
        GetPackstationsFilialeDirektByAddress $requestType
    ): GetPackstationsFilialeDirektByAddressResponse {
        /** @var GetPackstationsFilialeDirektByAddressResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }

    /**
     * @param GetPackstationsFilialeDirektByCoordinate $requestType
     * @return GetPackstationsFilialeDirektByCoordinateResponse
     * @throws \SoapFault
     */
    public function getPackstationsFilialeDirektByCoordinate(
        GetPackstationsFilialeDirektByCoordinate $requestType
    ): GetPackstationsFilialeDirektByCoordinateResponse {
        /** @var GetPackstationsFilialeDirektByCoordinateResponse $response */
        $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);

        return $response;
    }
}
