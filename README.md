# DHL Location Finder API SDK 

The DHL Location Finder API SDK package offers an interface to the *DHL Standortsuche*.
Use this SDK to get a list of DHL Paketboxes, parcel stations, and postal offices around a given address or a set of coordinates.

The SDK currently uses the *DHL Standortsuche Deutschland API* to retrieve locations,
although this may change in a future version.
You can find developer documentation for the *DHL Standortsuche Deutschland API* at <https://entwickler.dhl.de/group/ep/wsapis/standortsuche>

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
$ composer update
$ ./vendor/bin/phpunit -c test/phpunit.xml
```

## Features

The SDK offers the following service methods:

- **getPickUpLocations**
    - find pickup locations in a 15 km radius from a given address.
- **getPickUpLocationsByCoordinate**
    - find pickup locations in a 15 km radius from a given set of coordinates.
- **getDropOffLocations**
    - find drop-off locations in a 15 km radius from a given address.
- **getDropOffLocationsByCoordinate**
    - find drop-off locations in a 15 km radius from a given set of coordinates.

## Usage Example

```php
$sandboxMode = false;
$serviceFactory = new \Dhl\Sdk\LocationFinder\Service\ServiceFactory();
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

A `\Dhl\Sdk\LocationFinder\Exception\DetailedServiceException` indicates that the exception holds a
human-readable error message suitable for display to the end-user.
