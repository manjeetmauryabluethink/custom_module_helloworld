<?php
namespace Bluethink\Helloworld\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('user_email_data', 'id');
    }
}