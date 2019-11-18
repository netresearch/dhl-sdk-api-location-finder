# DHL Standortsuche Deutschland API SDK 

The *DHL Standortsuche Deutschland* API SDK package offers an
interface to the *DHL Standortsuche Deutschland API* services.

Use this SDK to get a list of DHL parcel stations, postal offices, and "Paketboxen" around a given address or a set of coordinates.

You can find developer documentation for this API here: <https://entwickler.dhl.de/group/ep/wsapis/standortsuche>

## Requirements

### System Requirements

- PHP 7.0+ with SOAP extension

### Package Requirements

- `psr/log`: PSR-3 logger interfaces

### Development Package Requirements

- `phpunit/phpunit`: Testing framework

## Installation

```bash
$ composer require dhl/sdk-api-location-finder
```

## Uninstallation

```bash
$ composer remove dhl/sdk-api-location-finder
```

## Testing

```bash
$ composer install
$ ./vendor/bin/phpunit -c test/phpunit.xml
```

## Features

The SOAP Webservice allows the following operations:

- **getPackstationsByAddress**:
    - find parcel stations in a 15 km radius from a given address.
- **getPackstationsByCoordinate**:
    - find parcel stations in a 15 km radius from a given set of coordinates.
- **getPaketboxesByAddress**:
    - find "Paketboxen" in a 15 km radius from a given address.
- **getPaketboxesByCoordinate**:
    - find "Paketboxen" in a 15 km radius from a given set of coordinates.
- **getPackstationsPaketboxesByAddress**:
    - find parcel stations and "Paketboxen" in a 15 km radius from a given address.
- **getPackstationsPaketboxesByCoordinate**:
    - find parcel stations and "Paketboxen" in a 15 km radius from a given set of coordinates.
- **getPackstationsFilialeDirektByAddress**:
    - find Postfiliale Direkt postal offices and parcel stations in a 15 km radius from a given address.
- **getPackstationsFilialeDirektByCoordinate**:
    - find Postfiliale Direkt postal offices and parcel stations in a 15 km radius from a given set of coordinates.
- **getBranchesByAddress**:
    - find postal offices in a 15 km radius from a given address.
- **getBranchesByCoordinate**:
    - find postal offices in a 15 km radius from a given set of coordinates.

## Usage Example

```php
$sandboxMode = false;
$serviceFactory = new \Dhl\Sdk\LocationFinder\Soap\SoapServiceFactory();
$service = $serviceFactory->createLocationFinderService(
    'appId',
    'appToken',
    new \Psr\Log\NullLogger(),
    $sandboxMode
);


try {
    /** @var \Dhl\Sdk\LocationFinder\Api\Data\LocationInterface $locations  */
    $locations = $service->getPickUpLocations(
        'DE',
        '04129',
        'Leipzig',
        'Nonnenstraße',
        '11d'
    );
} catch (\Dhl\Sdk\LocationFinder\Exception\ServiceException $e) {
    // handle errors
}

foreach ($locations as $location) {
    echo $location->getName();
    echo $location->getType();
    echo $location->getLatitude();
    echo $location->getLongitude();
    ...
}
```

## Error handling

The SDK will only ever throw exceptions of type `\Dhl\Sdk\LocationFinder\Exception\ServiceException`.
Subclasses of `ServiceException` may be used to describe the kind of error that occurred. 

A `\Dhl\Sdk\LocationFinder\Exception\DetailedServiceException` signifies that the exception holds a
human-readable error message suitable for display to the end-user.
