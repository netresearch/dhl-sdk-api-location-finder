<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Exception;

/**
 * Class ServiceException
 *
 * Generic SDK exception, can be used to catch any exception in
 * cases where the exact type does not matter.
 *
 * @api
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ServiceException extends \Exception
{
}
