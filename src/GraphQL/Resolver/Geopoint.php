<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL\Resolver;

use GraphQL\Type\Definition\ResolveInfo;
use Pimcore\Bundle\DataHubBundle\GraphQL\Traits\ServiceTrait;


class Geopoint
{
    use ServiceTrait;

    /**
     * @param null $value
     * @param array $args
     * @param array $context
     * @param ResolveInfo|null $resolveInfo
     * @return array
     * @throws \Exception
     */
    public function resolveLongitude($value = null, $args = [], $context, ResolveInfo $resolveInfo = null)
    {
        // cannot be changed to GeoCoordinates due to BC reasons
        if ($value instanceof \Pimcore\Model\DataObject\Data\Geopoint) {
            return $value->getLongitude();
        }

        return null;
    }

    /**
     * @param null $value
     * @param array $args
     * @param array $context
     * @param ResolveInfo|null $resolveInfo
     * @return array
     * @throws \Exception
     */
    public function resolveLatitude($value = null, $args = [], $context, ResolveInfo $resolveInfo = null)
    {
        // cannot be changed to GeoCoordinates due to BC reasons
        if ($value instanceof \Pimcore\Model\DataObject\Data\Geopoint) {
            return $value->getLatitude();
        }

        return null;
    }
}

