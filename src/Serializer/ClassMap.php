<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Serializer;

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
use Dhl\Sdk\LocationFinder\Model\RequestType\inputAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\inputTimeinfo;
use Dhl\Sdk\LocationFinder\Model\RequestType\location;
use Dhl\Sdk\LocationFinder\Model\ResponseType\address;
use Dhl\Sdk\LocationFinder\Model\ResponseType\automatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\automats;
use Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS;
use Dhl\Sdk\LocationFinder\Model\ResponseType\branch;
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
use Dhl\Sdk\LocationFinder\Model\ResponseType\locationWithDistance;
use Dhl\Sdk\LocationFinder\Model\ResponseType\pobox;
use Dhl\Sdk\LocationFinder\Model\ResponseType\poboxes;
use Dhl\Sdk\LocationFinder\Model\ResponseType\ServiceException;
use Dhl\Sdk\LocationFinder\Model\ResponseType\servicesAddition;
use Dhl\Sdk\LocationFinder\Model\ResponseType\serviceTypes;
use Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo;
use Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfos;

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
            'getBranchesByAddress' => getBranchesByAddress::class,
            'getBranchesByCoordinate' => getBranchesByCoordinate::class,
            'getPackstationsByAddress' => getPackstationsByAddress::class,
            'getPackstationsByCoordinate' => getPackstationsByCoordinate::class,
            'getPackstationsFilialeDirektByAddress' => getPackstationsFilialeDirektByAddress::class,
            'getPackstationsFilialeDirektByCoordinate' => getPackstationsFilialeDirektByCoordinate::class,
            'getPackstationsPaketboxesByAddress' => getPackstationsPaketboxesByAddress::class,
            'getPackstationsPaketboxesByCoordinate' => getPackstationsPaketboxesByCoordinate::class,
            'getPaketboxesByAddress' => getPaketboxesByAddress::class,
            'getPaketboxesByCoordinate' => getPaketboxesByCoordinate::class,
            'inputAddress' => inputAddress::class,
            'inputTimeinfo' => inputTimeinfo::class,
            'location' => location::class,

            // response types
            'address' => address::class,
            'automatFD' => automatFD::class,
            'automats' => automats::class,
            'automatWS' => automatWS::class,
            'branch' => branch::class,
            'getBranchesByAddressResponse' => getBranchesByAddressResponse::class,
            'getBranchesByCoordinateResponse' => getBranchesByCoordinateResponse::class,
            'getPackstationsByAddressResponse' => getPackstationsByAddressResponse::class,
            'getPackstationsByCoordinateResponse' => getPackstationsByCoordinateResponse::class,
            'getPackstationsFilialeDirektByAddressResponse' => getPackstationsFilialeDirektByAddressResponse::class,
            'getPackstationsFilialeDirektByCoordinateResponse' => getPackstationsFilialeDirektByCoordinateResponse::class,
            'getPackstationsPaketboxesByAddressResponse' => getPackstationsPaketboxesByAddressResponse::class,
            'getPackstationsPaketboxesByCoordinateResponse' => getPackstationsPaketboxesByCoordinateResponse::class,
            'getPaketboxesByAddressResponse' => getPaketboxesByAddressResponse::class,
            'getPaketboxesByCoordinateResponse' => getPaketboxesByCoordinateResponse::class,
            'locationWithDistance' => locationWithDistance::class,
            'pobox' => pobox::class,
            'poboxes' => poboxes::class,
            'ServiceException' => ServiceException::class,
            'servicesAddition' => servicesAddition::class,
            'serviceTypes' => serviceTypes::class,
            'timeinfo' => timeinfo::class,
            'timeinfos' => timeinfos::class,
        ];
    }
}
