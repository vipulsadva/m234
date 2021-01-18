<?php
namespace Addweb\News\Block\Adminhtml\Custom\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_custom_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Custom Information'));
    }
}