<?php
namespace Bluethink\Helloworld\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('admin_activity', 'user_id');
    }
}