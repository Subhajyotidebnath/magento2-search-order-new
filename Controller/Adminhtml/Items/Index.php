<?php
/**
 * Copyright © 2015 Dapl. All rights reserved.
 */

namespace Dapl\Searchtagorder\Controller\Adminhtml\Items;

class Index extends \Dapl\Searchtagorder\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Dapl_Searchtagorder::searchtagorder');
        $resultPage->getConfig()->getTitle()->prepend(__('Dapl Items'));
        $resultPage->addBreadcrumb(__('Dapl'), __('Dapl'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
