<?php

/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Sdk\LocationFinder\Test\Model;

use Dhl\Sdk\LocationFinder\Model\LocationResponseMapper;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Address;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\LocationWithDistance;
use Dhl\Sdk\LocationFinder\Model\ResponseType\ServicesAddition;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfo;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfos;
use PHPUnit\Framework\TestCase;

/**
 * Class LocationResponseMapperTest
 *
 * @author Max Melzer <max.melzer@netresearch.de>
 */
class LocationResponseMapperTest extends TestCase
{
    /**
     * @var AutomatFD
     */
    private $sampleLocation;

    protected function setUp()
    {
        $this->sampleLocation = new AutomatFD(55, 100, 110, 120);
        $sampleAddress = new Address();
        $sampleAddress->setCountry('Deutschland');
        $sampleAddress->setCity('Leipzig');
        $sampleAddress->setStreet('Nonnenstraße');
        $sampleAddress->setZip('04229');
        $sampleAddress->setStreetNo('11d');
        $sampleAddress->setRegion('Sachsen');
        $sampleAddress->setRemark('Netresearch');

        $this->sampleLocation->setAddress($sampleAddress);
        $this->sampleLocation->setExternalMarker('Netresearch');
        $this->sampleLocation->setHasHandicappedAccess(true);
        $this->sampleLocation->setHasParkingArea(false);
        $this->sampleLocation->setLocation(new LocationWithDistance(51.3773276, 12.4882551, 66));
        $this->sampleLocation->setServicesAddition(new ServicesAddition(['test123']));

        $sampleTimeinfo = new Timeinfo();
        $sampleTimeinfo->setType('0');
        $sampleTimeinfo2 = new Timeinfo();
        $sampleTimeinfo2->setType(LocationResponseMapper::TIME_INFO_TYPE_STORE);
        $sampleTimeinfo2->setDayFrom(1);
        $sampleTimeinfo2->setDayTo(3);
        $sampleTimeinfo2->setTimeFrom('10:00');
        $sampleTimeinfo2->setTimeTo('12:00');
        $this->sampleLocation->setTimeinfos(new Timeinfos([$sampleTimeinfo, $sampleTimeinfo2]));

        parent::setUp();
    }

    public function testGenericResponse()
    {
        $location = clone $this->sampleLocation;
        $location->setBranchType(0);

        $subject = new LocationResponseMapper();
        $result = $subject->map([$location]);

        self::assertEquals(
            100,
            $result[0]->getId()
        );
        self::assertEquals(
            120,
            $result[0]->getNumber()
        );
        self::assertSame(
            55,
            $result[0]->getDistanceInMeter()
        );
        self::assertSame(
            'Netresearch',
            $result[0]->getName()
        );
        self::assertContains(
            'test123',
            $result[0]->getServicesAddition()
        );
        self::assertFalse(
            $result[0]->hasParkingArea()
        );
        self::assertTrue(
            $result[0]->hasHandicapAccess()
        );
        self::assertSame(
            'Nonnenstraße',
            $result[0]->getAddress()->getStreet()
        );
        self::assertSame(
            'DE',
            $result[0]->getAddress()->getCountry(),
            'Mapper did not convert country into a country code'
        );
        self::assertSame(
            'Leipzig',
            $result[0]->getAddress()->getCity()
        );
        self::assertSame(
            '11d',
            $result[0]->getAddress()->getStreetNumber()
        );
        self::assertSame(
            '04229',
            $result[0]->getAddress()->getPostalCode()
        );
        self::assertSame(
            51.3773276,
            $result[0]->getLatitude()
        );
        self::assertSame(
            12.4882551,
            $result[0]->getLongitude()
        );
        self::assertSame(
            '10:00',
            $result[0]->getOpeningHours()[0]->getOpens()
        );
        self::assertSame(
            '12:00',
            $result[0]->getOpeningHours()[0]->getCloses()
        );
        self::assertSame(
            '12:00',
            $result[0]->getOpeningHours()[2]->getCloses()
        );
        self::assertSame(
            1,
            $result[0]->getOpeningHours()[0]->getDayOfWeek()
        );
        self::assertSame(
            2,
            $result[0]->getOpeningHours()[1]->getDayOfWeek()
        );
        self::assertSame(
            3,
            $result[0]->getOpeningHours()[2]->getDayOfWeek()
        );
    }

    public function testUnusualItems()
    {
        $locationWithoutHousenumber = clone $this->sampleLocation;
        $locationWithoutHousenumberAddress = clone $this->sampleLocation->getAddress();
        $locationWithoutHousenumber->setAddress($locationWithoutHousenumberAddress->setStreetNo(null));

        $postfilialeWithoutType = clone $this->sampleLocation;
        $postfilialeWithoutType->setBranchTypePF('');
        $postfilialeWithoutType->setDepotServiceNo(123);
        $postfilialeWithoutType->setPackstationId(0);

        $locationWithoutMarker = clone $this->sampleLocation;
        $locationWithoutMarker->setExternalMarker(null);

        $locationWithoutName = clone $locationWithoutMarker;
        $locationWithoutNameAddress = clone $this->sampleLocation->getAddress();
        $locationWithoutName->setAddress($locationWithoutNameAddress->setRemark(null));

        $openingTimeWithoutDayFrom = (new Timeinfo())
            ->setType(LocationResponseMapper::TIME_INFO_TYPE_STORE)
            ->setDayTo(3)
            ->setTimeFrom('10:00')
            ->setTimeTo('10:00');
        $locationWithOpeningTimeWithoutDayFrom = clone $this->sampleLocation;
        $locationWithOpeningTimeWithoutDayFrom->setTimeinfos(new Timeinfos([$openingTimeWithoutDayFrom]));

        $testLocations = [
            $locationWithoutHousenumber,
            $postfilialeWithoutType,
            $locationWithoutMarker,
            $locationWithoutName,
            $locationWithOpeningTimeWithoutDayFrom
        ];

        $subject = new LocationResponseMapper();

        $result = $subject->map($testLocations);

        self::assertSame(
            '',
            $result[0]->getAddress()->getStreetNumber(),
            'Mapper did not handle empty house number'
        );
        self::assertSame(
            'postfiliale',
            $result[1]->getType(),
            'Mapper did not infer postfiliale location type'
        );
        self::assertSame(
            '123',
            $result[1]->getNumber(),
            'Mapper did not get fallback shop number from the depotServiceNo field'
        );

        self::assertSame(
            'Netresearch',
            $result[2]->getName(),
            'Mapper did not get company from address remark'
        );
        self::assertSame(
            '',
            $result[3]->getName(),
            'Mapper did not handle empty company'
        );

        self::assertCount(
            1,
            $result[4]->getOpeningHours(),
            'Mapper did not handle opening timeinfo without day range'
        );
        self::assertSame(
            3,
            $result[4]->getOpeningHours()[0]->getDayOfWeek(),
            'Mapper did not handle opening timeinfo without day range'
        );
    }
}
