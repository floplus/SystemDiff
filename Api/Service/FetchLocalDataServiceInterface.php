<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace Magenerds\SystemDiff\Api\Service;

/**
 * Return locally configured config data.
 *
 * @api
 */
interface FetchLocalDataServiceInterface
{
    /**
     * Returns locally configured config data.
     *
     * @return \Magenerds\SystemDiff\Model\ConfigData
     */
    public function fetch();
}