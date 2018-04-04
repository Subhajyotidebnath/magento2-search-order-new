<?php
/**
 * Copyright © 2015 Dapl. All rights reserved.
 */

namespace Dapl\Searchtagorder\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dapl\Searchtagorder\Model\Items', 'Dapl\Searchtagorder\Model\Resource\Items');
    }
}
