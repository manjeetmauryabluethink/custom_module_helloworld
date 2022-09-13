<?php
namespace Bluethink\Helloworld\Model\ResourceModel\Post;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Bluethink\Helloworld\Model\Post', 'Bluethink\Helloworld\Model\ResourceModel\Post');
    }
}