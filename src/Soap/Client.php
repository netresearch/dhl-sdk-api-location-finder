<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Soap;

use Dhl\Sdk\LocationFinder\Exception\DetailedServiceException;
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
     * @throws DetailedServiceException
     */
    public function getPackstationsByCoordinate(
        getPackstationsByCoordinate $requestType
    ): getPackstationsByCoordinateResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPackstationsByAddress $requestType
     * @return getPackstationsByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsByAddress(getPackstationsByAddress $requestType): getPackstationsByAddressResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getBranchesByAddress $requestType
     * @return getBranchesByAddressResponse
     * @throws DetailedServiceException
     */
    public function getBranchesByAddress(getBranchesByAddress $requestType): getBranchesByAddressResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getBranchesByCoordinate $requestType
     * @return getBranchesByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getBranchesByCoordinate(getBranchesByCoordinate $requestType): getBranchesByCoordinateResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPackstationsPaketboxesByAddress $requestType
     * @return getPackstationsPaketboxesByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsPaketboxesByAddress(
        getPackstationsPaketboxesByAddress $requestType
    ): getPackstationsPaketboxesByAddressResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPackstationsPaketboxesByCoordinate $requestType
     * @return getPackstationsPaketboxesByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsPaketboxesByCoordinate(
        getPackstationsPaketboxesByCoordinate $requestType
    ): getPackstationsPaketboxesByCoordinateResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPaketboxesByAddress $requestType
     * @return getPaketboxesByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPaketboxesByAddress(getPaketboxesByAddress $requestType): getPaketboxesByAddressResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPaketboxesByCoordinate $requestType
     * @return getPaketboxesByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getPaketboxesByCoordinate(getPaketboxesByCoordinate $requestType): getPaketboxesByCoordinateResponse
    {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPackstationsFilialeDirektByAddress $requestType
     * @return getPackstationsFilialeDirektByAddressResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsFilialeDirektByAddress(
        getPackstationsFilialeDirektByAddress $requestType
    ): getPackstationsFilialeDirektByAddressResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }

    /**
     * @param getPackstationsFilialeDirektByCoordinate $requestType
     * @return getPackstationsFilialeDirektByCoordinateResponse
     * @throws DetailedServiceException
     */
    public function getPackstationsFilialeDirektByCoordinate(
        getPackstationsFilialeDirektByCoordinate $requestType
    ): getPackstationsFilialeDirektByCoordinateResponse {
        try {
            $response = $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
        } catch (\SoapFault $e) {
            throw new DetailedServiceException($e->getMessage(), $e->getCode(), $e);
        }

        return $response;
    }
}
