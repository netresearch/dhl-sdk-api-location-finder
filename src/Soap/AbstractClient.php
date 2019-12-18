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
 * AbstractClient
 *
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
abstract class AbstractClient
{
    /**
     * @param GetPackstationsByCoordinate $requestType
     * @return GetPackstationsByCoordinateResponse
     * @throws DetailedServiceException
     */
    abstract public function getPackstationsByCoordinate(
        GetPackstationsByCoordinate $requestType
    ): GetPackstationsByCoordinateResponse;

    /**
     * @param GetPackstationsByAddress $requestType
     * @return GetPackstationsByAddressResponse
     * @throws DetailedServiceException
     */
    abstract public function getPackstationsByAddress(
        GetPackstationsByAddress $requestType
    ): GetPackstationsByAddressResponse;

    /**
     * @param GetBranchesByAddress $requestType
     * @return GetBranchesByAddressResponse
     * @throws DetailedServiceException
     */
    abstract public function getBranchesByAddress(
        GetBranchesByAddress $requestType
    ): GetBranchesByAddressResponse;

    /**
     * @param GetBranchesByCoordinate $requestType
     * @return GetBranchesByCoordinateResponse
     * @throws DetailedServiceException
     */
    abstract public function getBranchesByCoordinate(
        GetBranchesByCoordinate $requestType
    ): GetBranchesByCoordinateResponse;

    /**
     * @param GetPackstationsPaketboxesByAddress $requestType
     * @return GetPackstationsPaketboxesByAddressResponse
     * @throws DetailedServiceException
     */
    abstract public function getPackstationsPaketboxesByAddress(
        GetPackstationsPaketboxesByAddress $requestType
    ): GetPackstationsPaketboxesByAddressResponse;

    /**
     * @param GetPackstationsPaketboxesByCoordinate $requestType
     * @return GetPackstationsPaketboxesByCoordinateResponse
     * @throws DetailedServiceException
     */
    abstract public function getPackstationsPaketboxesByCoordinate(
        GetPackstationsPaketboxesByCoordinate $requestType
    ): GetPackstationsPaketboxesByCoordinateResponse;

    /**
     * @param GetPaketboxesByAddress $requestType
     * @return GetPaketboxesByAddressResponse
     * @throws DetailedServiceException
     */
    abstract public function getPaketboxesByAddress(
        GetPaketboxesByAddress $requestType
    ): GetPaketboxesByAddressResponse;

    /**
     * @param GetPaketboxesByCoordinate $requestType
     * @return GetPaketboxesByCoordinateResponse
     * @throws DetailedServiceException
     */
    abstract public function getPaketboxesByCoordinate(
        GetPaketboxesByCoordinate $requestType
    ): GetPaketboxesByCoordinateResponse;

    /**
     * @param GetPackstationsFilialeDirektByAddress $requestType
     * @return GetPackstationsFilialeDirektByAddressResponse
     * @throws DetailedServiceException
     */
    abstract public function getPackstationsFilialeDirektByAddress(
        GetPackstationsFilialeDirektByAddress $requestType
    ): GetPackstationsFilialeDirektByAddressResponse;

    /**
     * @param GetPackstationsFilialeDirektByCoordinate $requestType
     * @return GetPackstationsFilialeDirektByCoordinateResponse
     * @throws DetailedServiceException
     */
    abstract public function getPackstationsFilialeDirektByCoordinate(
        GetPackstationsFilialeDirektByCoordinate $requestType
    ): GetPackstationsFilialeDirektByCoordinateResponse;
}
