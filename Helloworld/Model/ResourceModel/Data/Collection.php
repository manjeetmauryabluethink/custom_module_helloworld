<?php
namespace Bluethink\Helloworld\Model\ResourceModel\Data;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Bluethink\Helloworld\Model\Data', 'Bluethink\Helloworld\Model\ResourceModel\Data');
    }
}