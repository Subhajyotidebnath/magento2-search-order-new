<?php
/**
 * Copyright © 2015 Dapl. All rights reserved.
 */

namespace Dapl\Searchtagorder\Controller\Adminhtml\Items;

class NewAction extends \Dapl\Searchtagorder\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
