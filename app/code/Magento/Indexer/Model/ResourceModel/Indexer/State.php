<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Indexer\Model\ResourceModel\Indexer;

/**
 * Class \Magento\Indexer\Model\ResourceModel\Indexer\State
 *
 */
class State extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('indexer_state', 'state_id');
        $this->addUniqueField(['field' => ['indexer_id'], 'title' => __('State for the same indexer')]);
    }
}
