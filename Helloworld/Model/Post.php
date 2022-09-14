<?php
namespace Bluethink\Helloworld\Model;
 
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Bluethink\Helloworld\Model\ResourceModel\Post');
    }
}
