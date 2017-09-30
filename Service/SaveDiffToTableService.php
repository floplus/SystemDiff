<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace Magenerds\SystemDiff\Service;

use Magenerds\SystemDiff\Api\Service\SaveDiffToTableServiceInterface;
use Magenerds\SystemDiff\DataWriter\DataWriterInterface;
use Magenerds\SystemDiff\DataWriter\DataWriterPool;

/**
 * Class SaveDiffToTableService
 * @package Magenerds\SystemDiff\Service
 */
class SaveDiffToTableService implements SaveDiffToTableServiceInterface
{
    /**
     * @var DataWriterPool
     */
    private $writerPool;

    /**
     * StoreConfigDataWriter constructor.
     * @param DataWriterPool $writerPool
     */
    public function __construct(DataWriterPool $writerPool)
    {
        $this->writerPool = $writerPool;
    }

    /**
     * @param array $diffData
     * @return void
     */
    public function saveData(array $diffData)
    {
        foreach ($this->writerPool as $writer) {
            /** @var DataWriterInterface $writer */
            $writer->write($diffData);
        }
    }
}