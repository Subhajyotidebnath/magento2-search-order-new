<?php
/**
 * Copyright © 2015 Dapl. All rights reserved.
 */

namespace Dapl\Searchtagorder\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('dapl_searchtagorder_items', 'id');
    }
}
