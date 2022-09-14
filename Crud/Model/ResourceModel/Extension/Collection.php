<?php
namespace Mbluethink\Crud\Model\ResourceModel\Extension;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        echo "collection";
        echo "<br>";
        $this->_init('Mbluethink\Crud\Model\Extension', 'Mbluethink\Crud\Model\ResourceModel\Extension');
    }
}