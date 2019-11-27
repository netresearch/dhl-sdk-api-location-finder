<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Serializer;

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
use Dhl\Sdk\LocationFinder\Model\RequestType\InputAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\InputTimeinfo;
use Dhl\Sdk\LocationFinder\Model\RequestType\Location;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Address;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Automats;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Branch;
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
use Dhl\Sdk\LocationFinder\Model\ResponseType\LocationWithDistance;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Pobox;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Poboxes;
use Dhl\Sdk\LocationFinder\Model\ResponseType\ServiceException;
use Dhl\Sdk\LocationFinder\Model\ResponseType\ServicesAddition;
use Dhl\Sdk\LocationFinder\Model\ResponseType\ServiceTypes;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfo;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfos;

/**
 * ClassMap
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ClassMap
{
    /**
     * Map WSDL types to PHP classes.
     *
     * @return string[]
     */
    public static function get()
    {
        return [
            // request types
            'getBranchesByAddress' => GetBranchesByAddress::class,
            'getBranchesByCoordinate' => GetBranchesByCoordinate::class,
            'getPackstationsByAddress' => GetPackstationsByAddress::class,
            'getPackstationsByCoordinate' => GetPackstationsByCoordinate::class,
            'getPackstationsFilialeDirektByAddress' => GetPackstationsFilialeDirektByAddress::class,
            'getPackstationsFilialeDirektByCoordinate' => GetPackstationsFilialeDirektByCoordinate::class,
            'getPackstationsPaketboxesByAddress' => GetPackstationsPaketboxesByAddress::class,
            'getPackstationsPaketboxesByCoordinate' => GetPackstationsPaketboxesByCoordinate::class,
            'getPaketboxesByAddress' => GetPaketboxesByAddress::class,
            'getPaketboxesByCoordinate' => GetPaketboxesByCoordinate::class,
            'inputAddress' => InputAddress::class,
            'inputTimeinfo' => InputTimeinfo::class,
            'location' => Location::class,

            // response types
            'address' => Address::class,
            'automatFD' => AutomatFD::class,
            'automats' => Automats::class,
            'automatWS' => AutomatWS::class,
            'branch' => Branch::class,
            'getBranchesByAddressResponse' => GetBranchesByAddressResponse::class,
            'getBranchesByCoordinateResponse' => GetBranchesByCoordinateResponse::class,
            'getPackstationsByAddressResponse' => GetPackstationsByAddressResponse::class,
            'getPackstationsByCoordinateResponse' => GetPackstationsByCoordinateResponse::class,
            'getPackstationsFilialeDirektByAddressResponse' => GetPackstationsFilialeDirektByAddressResponse::class,
            'getPackstationsFilialeDirektByCoordinateResponse' =>
                GetPackstationsFilialeDirektByCoordinateResponse::class,
            'getPackstationsPaketboxesByAddressResponse' => GetPackstationsPaketboxesByAddressResponse::class,
            'getPackstationsPaketboxesByCoordinateResponse' => GetPackstationsPaketboxesByCoordinateResponse::class,
            'getPaketboxesByAddressResponse' => GetPaketboxesByAddressResponse::class,
            'getPaketboxesByCoordinateResponse' => GetPaketboxesByCoordinateResponse::class,
            'locationWithDistance' => LocationWithDistance::class,
            'pobox' => Pobox::class,
            'poboxes' => Poboxes::class,
            'ServiceException' => ServiceException::class,
            'servicesAddition' => ServicesAddition::class,
            'serviceTypes' => ServiceTypes::class,
            'timeinfo' => Timeinfo::class,
            'timeinfos' => Timeinfos::class,
        ];
    }
}
