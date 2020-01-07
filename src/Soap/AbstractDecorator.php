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
 * Class AbstractDecorator
 * Wrapper around actual soap client to perform the log communication
 *
 * @author  Andreas Müller <andreas.mueller@netresearch.de>
 * @link    https://www.netresearch.de
 */
abstract class AbstractDecorator extends AbstractClient
{
    /**
     * @var AbstractClient
     */
    private $client;

    /**
     * AbstractDecorator constructor.
     * @param AbstractClient $client
     */
    public function __construct(AbstractClient $client)
    {
        $this->client = $client;
    }

    public function getPackstationsByCoordinate(
        GetPackstationsByCoordinate $requestType
    ): GetPackstationsByCoordinateResponse {
        return $this->client->getPackstationsByCoordinate($requestType);
    }

    public function getPackstationsByAddress(GetPackstationsByAddress $requestType): GetPackstationsByAddressResponse
    {
        return $this->client->getPackstationsByAddress($requestType);
    }

    public function getBranchesByAddress(GetBranchesByAddress $requestType): GetBranchesByAddressResponse
    {
        return $this->client->getBranchesByAddress($requestType);
    }

    public function getBranchesByCoordinate(GetBranchesByCoordinate $requestType): GetBranchesByCoordinateResponse
    {
        return $this->client->getBranchesByCoordinate($requestType);
    }

    public function getPackstationsPaketboxesByAddress(
        GetPackstationsPaketboxesByAddress $requestType
    ): GetPackstationsPaketboxesByAddressResponse {
        return $this->client->getPackstationsPaketboxesByAddress($requestType);
    }

    public function getPackstationsPaketboxesByCoordinate(
        GetPackstationsPaketboxesByCoordinate $requestType
    ): GetPackstationsPaketboxesByCoordinateResponse {
        return $this->client->getPackstationsPaketboxesByCoordinate($requestType);
    }

    public function getPaketboxesByAddress(GetPaketboxesByAddress $requestType): GetPaketboxesByAddressResponse
    {
        return $this->client->getPaketboxesByAddress($requestType);
    }

    public function getPaketboxesByCoordinate(GetPaketboxesByCoordinate $requestType): GetPaketboxesByCoordinateResponse
    {
        return $this->client->getPaketboxesByCoordinate($requestType);
    }

    public function getPackstationsFilialeDirektByAddress(
        GetPackstationsFilialeDirektByAddress $requestType
    ): GetPackstationsFilialeDirektByAddressResponse {
        return $this->client->getPackstationsFilialeDirektByAddress($requestType);
    }

    public function getPackstationsFilialeDirektByCoordinate(
        GetPackstationsFilialeDirektByCoordinate $requestType
    ): GetPackstationsFilialeDirektByCoordinateResponse {
        return $this->client->getPackstationsFilialeDirektByCoordinate($requestType);
    }
}
