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
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class LoggerDecorator
 *
 * @author  Andreas Müller <andreas.mueller@netresearch.de>
 * @link    https://www.netresearch.de
 */
class LoggerDecorator extends AbstractDecorator
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * LoggerDecorator constructor.
     *
     * @param AbstractClient $client
     * @param \SoapClient $soapClient
     * @param LoggerInterface $logger
     */
    public function __construct(
        AbstractClient $client,
        \SoapClient $soapClient,
        LoggerInterface $logger
    ) {
        $this->soapClient = $soapClient;
        $this->logger = $logger;

        parent::__construct($client);
    }

    /**
     * @param \Closure $performRequest
     * @return mixed
     * @throws DetailedServiceException
     */
    private function logCommunication(\Closure $performRequest)
    {
        $logLevel = LogLevel::INFO;
        try {
            return $performRequest();
        } catch (\SoapFault $fault) {
            $logLevel = LogLevel::ERROR;

            throw new DetailedServiceException($fault->getMessage(), $fault->getCode(), $fault);
        } finally {
            $lastRequest = $this->soapClient->__getLastRequest();
            $lastResponse = $this->soapClient->__getLastResponse();

            $this->logger->log($logLevel, $lastRequest);
            $this->logger->log($logLevel, $lastResponse);

            if (isset($fault)) {
                $this->logger->log($logLevel, $fault->getMessage());
            }
        }
    }

    public function getPackstationsByCoordinate(
        GetPackstationsByCoordinate $requestType
    ): GetPackstationsByCoordinateResponse {
        $performRequest = function () use ($requestType) {
            return parent::getPackstationsByCoordinate($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPackstationsByAddress(GetPackstationsByAddress $requestType): GetPackstationsByAddressResponse
    {
        $performRequest = function () use ($requestType) {
            return parent::getPackstationsByAddress($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getBranchesByAddress(GetBranchesByAddress $requestType): GetBranchesByAddressResponse
    {
        $performRequest = function () use ($requestType) {
            return parent::getBranchesByAddress($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getBranchesByCoordinate(GetBranchesByCoordinate $requestType): GetBranchesByCoordinateResponse
    {
        $performRequest = function () use ($requestType) {
            return parent::getBranchesByCoordinate($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPackstationsPaketboxesByAddress(
        GetPackstationsPaketboxesByAddress $requestType
    ): GetPackstationsPaketboxesByAddressResponse {
        $performRequest = function () use ($requestType) {
            return parent::getPackstationsPaketboxesByAddress($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPackstationsPaketboxesByCoordinate(
        GetPackstationsPaketboxesByCoordinate $requestType
    ): GetPackstationsPaketboxesByCoordinateResponse {
        $performRequest = function () use ($requestType) {
            return parent::getPackstationsPaketboxesByCoordinate($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPaketboxesByAddress(GetPaketboxesByAddress $requestType): GetPaketboxesByAddressResponse
    {
        $performRequest = function () use ($requestType) {
            return parent::getPaketboxesByAddress($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPaketboxesByCoordinate(GetPaketboxesByCoordinate $requestType): GetPaketboxesByCoordinateResponse
    {
        $performRequest = function () use ($requestType) {
            return parent::getPaketboxesByCoordinate($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPackstationsFilialeDirektByAddress(
        GetPackstationsFilialeDirektByAddress $requestType
    ): GetPackstationsFilialeDirektByAddressResponse {
        $performRequest = function () use ($requestType) {
            return parent::getPackstationsFilialeDirektByAddress($requestType);
        };

        return $this->logCommunication($performRequest);
    }

    public function getPackstationsFilialeDirektByCoordinate(
        GetPackstationsFilialeDirektByCoordinate $requestType
    ): GetPackstationsFilialeDirektByCoordinateResponse {
        $performRequest = function () use ($requestType) {
            return parent::getPackstationsFilialeDirektByCoordinate($requestType);
        };

        return $this->logCommunication($performRequest);
    }
}
