<?php

namespace Addweb\News\Model\ResourceModel\Custom;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Addweb\News\Model\Custom', 'Addweb\News\Model\ResourceModel\Custom');
    }
}
