<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Soap;

use Dhl\Sdk\LocationFinder\Exception\DetailedServiceException;
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
     * @throws DetailedServiceException
     */
    public function getPackstationsByCoordinate(
        GetPackstationsByCoordinate $requestType
    ): GetPackstationsByCoordinateResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPackstationsByAddress $requestType
     * @return GetPackstationsByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsByAddress(GetPackstationsByAddress $requestType): GetPackstationsByAddressResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetBranchesByAddress $requestType
     * @return GetBranchesByAddressResponse
     * @throws DetailedServiceException
     */
    public function getBranchesByAddress(GetBranchesByAddress $requestType): GetBranchesByAddressResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetBranchesByCoordinate $requestType
     * @return GetBranchesByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getBranchesByCoordinate(GetBranchesByCoordinate $requestType): GetBranchesByCoordinateResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPackstationsPaketboxesByAddress $requestType
     * @return GetPackstationsPaketboxesByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsPaketboxesByAddress(
        GetPackstationsPaketboxesByAddress $requestType
    ): GetPackstationsPaketboxesByAddressResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPackstationsPaketboxesByCoordinate $requestType
     * @return GetPackstationsPaketboxesByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsPaketboxesByCoordinate(
        GetPackstationsPaketboxesByCoordinate $requestType
    ): GetPackstationsPaketboxesByCoordinateResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPaketboxesByAddress $requestType
     * @return GetPaketboxesByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPaketboxesByAddress(GetPaketboxesByAddress $requestType): GetPaketboxesByAddressResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPaketboxesByCoordinate $requestType
     * @return GetPaketboxesByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getPaketboxesByCoordinate(GetPaketboxesByCoordinate $requestType): GetPaketboxesByCoordinateResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPackstationsFilialeDirektByAddress $requestType
     * @return GetPackstationsFilialeDirektByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsFilialeDirektByAddress(
        GetPackstationsFilialeDirektByAddress $requestType
    ): GetPackstationsFilialeDirektByAddressResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param GetPackstationsFilialeDirektByCoordinate $requestType
     * @return GetPackstationsFilialeDirektByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsFilialeDirektByCoordinate(
        GetPackstationsFilialeDirektByCoordinate $requestType
    ): GetPackstationsFilialeDirektByCoordinateResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }
}
