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
 * AbstractClient
 *
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
abstract class AbstractClient
{
    /**
     * @param getPackstationsByCoordinate $requestType
     * @return getPackstationsByCoordinateResponse
     */
    abstract public function getPackstationsByCoordinate(getPackstationsByCoordinate $requestType): getPackstationsByCoordinateResponse;

    /**
     * @param getPackstationsByAddress $requestType
     * @return getPackstationsByAddressResponse
     */
    abstract public function getPackstationsByAddress(getPackstationsByAddress $requestType): getPackstationsByAddressResponse;

    /**
     * @param getBranchesByAddress $requestType
     * @return getBranchesByAddressResponse
     */
    abstract public function getBranchesByAddress(getBranchesByAddress $requestType): getBranchesByAddressResponse;

    /**
     * @param getBranchesByCoordinate $requestType
     * @return getBranchesByCoordinateResponse
     */
    abstract public function getBranchesByCoordinate(getBranchesByCoordinate $requestType): getBranchesByCoordinateResponse;

    /**
     * @param getPackstationsPaketboxesByAddress $requestType
     * @return getPackstationsPaketboxesByAddressResponse
     */
    abstract public function getPackstationsPaketboxesByAddress(getPackstationsPaketboxesByAddress $requestType): getPackstationsPaketboxesByAddressResponse;

    /**
     * @param getPackstationsPaketboxesByCoordinate $requestType
     * @return getPackstationsPaketboxesByCoordinateResponse
     */
    abstract public function getPackstationsPaketboxesByCoordinate(getPackstationsPaketboxesByCoordinate $requestType): getPackstationsPaketboxesByCoordinateResponse;

    /**
     * @param getPaketboxesByAddress $requestType
     * @return getPaketboxesByAddressResponse
     */
    abstract public function getPaketboxesByAddress(getPaketboxesByAddress $requestType): getPaketboxesByAddressResponse;

    /**
     * @param getPaketboxesByCoordinate $requestType
     * @return getPaketboxesByCoordinateResponse
     */
    abstract public function getPaketboxesByCoordinate(getPaketboxesByCoordinate $requestType): getPaketboxesByCoordinateResponse;

    /**
     * @param getPackstationsFilialeDirektByAddress $requestType
     * @return getPackstationsFilialeDirektByAddressResponse
     */
    abstract public function getPackstationsFilialeDirektByAddress(getPackstationsFilialeDirektByAddress $requestType): getPackstationsFilialeDirektByAddressResponse;

    /**
     * @param getPackstationsFilialeDirektByCoordinate $requestType
     * @return getPackstationsFilialeDirektByCoordinateResponse
     */
    abstract public function getPackstationsFilialeDirektByCoordinate(getPackstationsFilialeDirektByCoordinate $requestType): getPackstationsFilialeDirektByCoordinateResponse;
}
