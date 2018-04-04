<?php
/**
 * Copyright © 2015 Dapl. All rights reserved.
 */

// @codingStandardsIgnoreFile

namespace Dapl\Searchtagorder\Block\Adminhtml\Items\Edit\Tab;


use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;



class Main extends Generic implements TabInterface
{

    /**
     * {@inheritdoc}
     */
    public function getTabLabel()
    {
        return __('Item Information');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Item Information');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }

    /**
     * Prepare form before rendering HTML
     *
     * @return $this
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('current_dapl_searchtagorder_items');
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('item_');
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Item Information')]);
        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }
        $fieldset->addField(
            'tag_name',
            'text',
            ['name' => 'tag_name', 'label' => __('Tag Name'), 'title' => __('Tag Name'), 'required' => true]
        );
        $fieldset->addField(
            'product_id',
            'text',
            ['name' => 'product_id', 'label' => __('Product ID'), 'title' => __('Product ID'), 'required' => true]
        );
        $fieldset->addField(
            'order',
            'text',
            ['name' => 'order', 'label' => __('Order'), 'title' => __('Order'), 'required' => true]
        );
        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
