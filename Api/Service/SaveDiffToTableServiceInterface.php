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
 * Interface SaveDiffToTableServiceInterface
 * @package Magenerds\SystemDiff\Api\Service
 */
interface SaveDiffToTableServiceInterface
{
    /**
     * @param array $diffData
     * @return void
     */
    public function saveData(array $diffData);
}