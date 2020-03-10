<?php

namespace Divante\Offline\Model;

use \Magento\Framework\Model\AbstractModel;

class Stores extends AbstractModel
{


    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init('Divante\Offline\Model\ResourceModel\Stores');
    }


}

