<?php


namespace Divante\Offline\Block;

use Divante\Offline\Model\ResourceModel\Stores\Collection;
use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Collection
     */
    private $collection;

    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getStores() {
        return $this->collection->getData();
    }
}