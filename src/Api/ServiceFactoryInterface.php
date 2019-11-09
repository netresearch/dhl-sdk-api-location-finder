<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Api;

use Dhl\Sdk\LocationFinder\Exception\ServiceException;
use Psr\Log\LoggerInterface;

/**
 * Interface ServiceFactoryInterface
 *
 * @api
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface ServiceFactoryInterface
{
    const BASE_URL_PRODUCTION = 'https://cig.dhl.de/services/production/soap';
    const BASE_URL_SANDBOX = 'https://cig.dhl.de/services/sandbox/soap';

    /**
     * Create the location finder service.
     *
     * @param string $appId
     * @param string $appToken
     * @param LoggerInterface $logger
     * @param bool $sandboxMode
     * @return LocationFinderServiceInterface
     * @throws ServiceException
     */
    public function createLocationFinderService(
        string $appId,
        string $appToken,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): LocationFinderServiceInterface;
}
