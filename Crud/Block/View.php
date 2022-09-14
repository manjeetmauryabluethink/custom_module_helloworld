<?php

namespace Mbluethink\Crud\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Mbluethink\Crud\Model\ResourceModel\Extension\CollectionFactory;

class View extends Template
{

    public $collection;

    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        return $this->collection->create();
    }

    public function getDeleteAction()
    {
        return   $this->getUrl('crud/index/delete' , ['_secure' => true]);
    }

    public function getEditAction()
    {
        return $this->getUrl('crud/index/edit', ['_secure' => true]);
    }

}