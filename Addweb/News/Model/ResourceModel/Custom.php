<?php

namespace Addweb\News\Model\ResourceModel;

/**
 * Custom resource
 */
class Custom extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('news_custom', 'id');
    }

  
}
