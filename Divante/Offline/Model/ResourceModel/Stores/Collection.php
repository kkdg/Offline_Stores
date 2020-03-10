<?php

namespace Divante\Offline\Model\ResourceModel\Stores;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Divante\Offline\Model\Stores', 'Divante\Offline\Model\ResourceModel\Stores');
    }
}
