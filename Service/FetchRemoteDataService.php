<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace Magenerds\SystemDiff\Service;

use Magenerds\SystemDiff\Api\Data\ConfigDataInterface;
use Magenerds\SystemDiff\Api\Service\FetchRemoteDataServiceInterface;
use Magenerds\SystemDiff\Remote\ClientAdapter;
use Magenerds\SystemDiff\Remote\ClientInterface;
use Magento\Framework\Config\Data\ConfigData;

class FetchRemoteDataService implements FetchRemoteDataServiceInterface
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var ClientAdapter
     */
    private $clientAdapter;

    /**
     * @param ClientAdapter $clientAdapter
     */
    public function __construct(ClientAdapter $clientAdapter)
    {

        $this->clientAdapter = $clientAdapter;
        $this->client = $this->clientAdapter->getClient();
    }

    /**
     * @return ConfigDataInterface
     */
    public function fetch()
    {
        return $this->client->fetch();
    }
}